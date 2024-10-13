<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Awards;
use App\Models\Book;
use App\Models\Literary_moviment;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    protected $rules=[
        'name'=>'required|max:100',
        'bio'=>'required|max:250',
        'nationality'=>'required|max:30',
        'birthdate'=>'required',
        'gender'=>'required|in:M,F',
    ];
    protected $messages=[
        'required' => 'The :attribute field is required.',
        'max' => 'The :attribute may not have more than :max characters.',
        'in' => 'The :attribute must be one of the following types: :values',
    ];

    public function index(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $awards = Awards::all();
        $books = Book::all();
        $literary_moviments = literary_moviment::all();

        return view('template.authors.create', ['awards'=>$awards, 'books'=>$books, 'literary_moviments'=>$literary_moviments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados=$request->validate($this->rules,$this->messages);
        $author = new Author($dados);
        $author->literary_moviment_id = $request->input('literary_moviment_id');
        $author->save();

        if ($request->has('awards')) {
            $author->awards()->sync($request->input('awards'));
        }

        if ($request->has('books')) {
            $author->books()->sync($request->input('books'));
        }

        return redirect()->route('home');


    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        $author = Author::with('awards', 'books')->findOrFail($author->id);
        $awards = Awards::all();
        $books = Book::all();

        return view('template.authors.show', compact('author','awards', 'books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        $awards = Awards::all();
        $books = Book::all();
        $literary_moviments = literary_moviment::all();

        return view('template.authors.edit', ['author' => $author, 'awards' => $awards, 'books' => $books, 'literary_moviments' => $literary_moviments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $dados=$request->validate($this->rules,$this->messages);
        $author->update($dados);
        $author->literary_moviment_id = $request->input('literary_moviment_id');
        $author->save();

        if ($request->has('awards')) {
            $author->awards()->sync($request->input('awards'));
        }

        if ($request->has('books')) {
            $author->books()->sync($request->input('books'));
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->awards()->detach();
        $author->books()->detach();

        $author->delete();
        return to_route('home');
    }

    public function nationalities(Request $request)
    {
        $nationality = urldecode($request->input('nationality'));
        if(!$nationality){
            return view('template.authors.nationality', ['authors'=>Author::all()]);
        }

        return  view('template.authors.nationality', ['authors'=>Author::query()->where('nationality', $nationality)->get()]);
    }

    public function literary_movements(Request $request)
    {
        $literary_movement = urldecode($request->input('literary_movement'));

        if(!$literary_movement){
            return view('template.authors.literary_movements', ['authors'=>Author::all()]);
        }


        $author = Author::query()
            ->join('literary_moviments', 'authors.literary_moviment_id', '=', 'literary_moviments.id')
            ->where('literary_moviments.name', $literary_movement)
            ->select('authors.*')
            ->get();


        //dd($author);
        return view('template.authors.literary_movements', ['authors' => $author]);

    }
}
