<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        return view('template.books.edit', ['book' => $book, 'genres' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->genres()->detach();  // Remove all genre associations
        $book->authors()->detach(); // Remove all author associations

        $book->delete();
        return to_route('home');
    }

    public function genres(Request $request)
    {
        $genreName = urldecode($request->input('genres'));
        //dd($genreName);
        if(!$genreName){
            return view('template.books.genres', ['books'=>Book::all()]);
        }

        $genre = Genre::query()->where('name', $genreName)->first();
        //dd($genre);
        $book = $genre->books;
        //dd($book);
        //dd($genre);
        return view('template.books.genres', ['books'=>$book]);
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

    /*public function format(Request $request)
    {
        $format = $request->input('format');
        if(!$format){
            return view('template.books.format', ['books'=>Book::all()]);
        }

        return view('template.books.format', ['books'=>Book::query()->where('format', $format)->get()]);
    }*/
}
