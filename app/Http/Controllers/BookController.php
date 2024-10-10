<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }

    public function genres()
    {

        return view('template.books.genres', ['books'=>Book::all()]);
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
}
