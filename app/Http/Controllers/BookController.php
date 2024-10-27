<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Languages;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    protected $rules=[
        'title'=>'required|string|max:100',
        'subtitle'=>'nullable|string|max:100',
        'description'=>'required|max:500',
        'ISBN'=>'required|unique:books,ISBN|min:17|max:17',
        'pages'=>'required|integer|min:1',
        'publication_date'=>'required|date|before_or_equal:today',
        'publisher_id'=>'required',
        'language_id'=>'required',
    ];
    protected $messages=[
        'required' => 'The :attribute field is required.',
        'min' => 'The :attribute must have at least :min characters.',
        'max' => 'The :attribute may not have more than :max characters.',
        'unique' => 'The ISBN must be unique.',
        'ISBN.required' => 'The ISBN field is required.',
    ];

    public function index(Request $request)
    {
        // Get search input and items per page
        $search = $request->input('search');
        $perPage = $request->input('per_page', 12); // Default to 12 if not provided

        // Get current pages from request
        $booksPage = $request->input('books_page', 1);
        $authorsPage = $request->input('authors_page', 1);

        // Filter criteria from the request
        $ISBN = $request->input('ISBN');
        $pagesMin = $request->input('pages_min');
        $pagesMax = $request->input('pages_max');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $genres = $request->input('genres');

        // Fetch books with pagination and apply multiple filters
        $books = Book::when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%$search%")
                    ->orWhere('subtitle', 'LIKE', "%$search%")
                    ->orWhere('description', 'LIKE', "%$search%");
            });
        })
            ->when($ISBN, function ($query) use ($ISBN) {
                $query->where('isbn', $ISBN);
            })
            ->when($pagesMin && $pagesMax, function ($query) use ($pagesMin, $pagesMax) {
                $query->whereBetween('pages', [$pagesMin, $pagesMax]);
            })
            ->when($startDate && $endDate, function ($query) use ($startDate, $endDate) {
                $query->whereBetween('publishing_date', [$startDate, $endDate]);
            })
            ->when($genres, function ($query) use ($genres) {
                $query->whereIn('genre_id', $genres);
            })
            ->paginate($perPage, ['*'], 'books_page', $booksPage);

        // Fetch authors with a search filter and pagination
        $authors = Author::when($search, function ($query) use ($search) {
            $query->where('name', 'LIKE', "%$search%");
        })
            ->paginate($perPage, ['*'], 'authors_page', $authorsPage);

        // Get counts of books and authors
        $booksCount = $books->total(); // Total number of books
        $authorsCount = $authors->total(); // Total number of authors

        // Fetch all genres for the dropdown
        $genres = Genre::all();

        // Return the view with the books, authors, and their counts
        return view('template.books.index', compact('books', 'authors', 'search', 'perPage', 'booksCount', 'authorsCount', 'genres'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        $author = Author::all();

        return view('template.books.create', ['genres' => $genre, 'authors' => $author]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados=$request->validate($this->rules,$this->messages);
        $book = new Book($dados);
        $book->save();

        if ($request->has('genres')) {
            $book->genres()->sync($request->input('genres'));
        }

        if ($request->has('authors')) {
            $book->authors()->sync($request->input('authors'));
        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        // Fetch the book with the given ID, including its authors and genres
        $book = Book::with('authors', 'genres')->findOrFail($book->id);
        $genres = Genre::all();
        $authors = Author::all();
        // Return the view with the book data
        return view('template.books.show', compact('book','genres', 'authors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $genre = Genre::all();
        $author = Author::all();
        $publisher = Publisher::all();
        $language = Languages::all();
        return view('template.books.edit', ['book' => $book, 'genres' => $genre, 'authors' => $author, 'publishers' => $publisher, 'languages' => $language]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {

        $this->rules['image'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        $this->rules['ISBN'] = 'required|min:17|max:17|unique:books,ISBN,' . $book->id;
        $this->rules['language_id'] = 'required';
        //dd($request->all());
        $dados=$request->validate($this->rules,$this->messages);

        $book->update($dados);
        $book->save();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Store the image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Create a unique name for the image
            $imagePath = $image->storeAs('images', $imageName, 'public'); // Store in 'storage/app/public/images'

            // Update book's image information in the database
            $book->image_name = pathinfo($imageName, PATHINFO_FILENAME); // Store the image name without extension
            $book->image_type = $image->getClientOriginalExtension(); // Store the image type (extension)
            $book->save();
        }

        if ($request->has('genres')) {
            $book->genres()->sync($request->input('genres'));
        }

        if ($request->has('authors')) {
            $book->authors()->sync($request->input('authors'));
        }



        //return redirect()->back();
        return view('template.books.show', compact('book'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->genres()->detach();
        $book->authors()->detach();

        $book->delete();
        return to_route('home');
    }


    public function genres(Request $request)
    {
        $genre = $request->input('genre');

        if (!$genre) {
            $genreName = urldecode($request->input('genres'));

            if (!$genreName) {
                return view('template.books.genres', ['books' => Book::all()]);
            }

            $genre = Genre::query()->where('name', $genreName)->first();

            if (!$genre) {
                return view('template.books.genres', ['books' => collect([])]);
            }

            $books = $genre->books;

            return view('template.books.genres', ['books' => $books]);
        }

        return view('template.books.genres', ['books' => Book::query()->where('genre', $genre)->get()]);
    }

    public function decades(Request $request)
    {
        $decade = $request->input('decades');
        if(!$decade){
            return view('template.books.decades', ['books'=>Book::all()]);
        }

        $decadePrefix = substr($decade, 0, 3);

        if($decade==-1000){
            $books = Book::query()->whereYear('publication_date', '<', 1000)->get();

            foreach($books as $book){
                $book->publication_date = ltrim($book->publication_date, '0');
            }

            return view('template.books.decades', ['books'=> $books]);
        }else{
            return view('template.books.decades', ['books'=>Book::query()->where('publication_date', 'LIKE', $decadePrefix.'%')->get()]);
        }

    }

    public function languages(Request $request)
    {
        $language = $request->input('languages');
        if(!$language){
            return view('template.books.languages', ['books'=>Book::all()]);
        }

        return view('template.books.languages', ['books'=>Book::query()->where('language', $language)->get()]);
    }

    public function format(Request $request)
    {
        $format = $request->input('format');
        if(!$format){
            return view('template.books.format', ['books'=>Book::all()]);
        }

        return view('template.books.format', ['books'=>Book::query()->where('format', $format)->get()]);
    }



}
