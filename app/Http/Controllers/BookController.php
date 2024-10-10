<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $rules=[
        'title'=>'required|max:100',
        'subtitle'=>'nullable|max:100',
        'description'=>'required|max:500',
        'ISBN'=>'required|unique:books,ISBN|min:17|max:17',
        'pages'=>'required',
        'publication_date'=>'required',
        'publisher'=>'required|max:100',
        'language'=>'required|min:2|max:2',
    ];
    protected $messages=[
        'required' => 'The :attribute field is required.',
        'min' => 'The :attribute must have at least :min characters.',
        'max' => 'The :attribute may not have more than :max characters.',
        'unique' => 'The ISBN must be unique.',
    ];

    public function index(Request $request)
    {
        // Get search input and items per page
        $search = $request->input('search');
        $perPage = $request->input('per_page', 12); // Default to 12 if not provided

        // Fetch books with pagination and filter by title if search term exists
        $books = Book::when($search, function ($query) use ($search) {
            return $query->where('title', 'LIKE', "%$search%");
        })->paginate($perPage);

        // Fetch authors based on the search term
        $authors = Author::when($search, function ($query) use ($search) {
            return $query->where('name', 'LIKE', "%$search%");
        })->get();

        // Return the view with the books and authors
        return view('home', compact('books', 'authors', 'search', 'perPage'));
        //


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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $genre = Genre::all();
        $author = Author::all();

        return view('template.books.edit', ['book' => $book, 'genres' => $genre, 'authors' => $author]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $this->rules['ISBN'] = 'required|min:17|max:17|unique:books,ISBN,' . $book->id;
        $dados=$request->validate($this->rules,$this->messages);
        $book->update($dados);
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
