<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count = Book::count();
        $books = Book::all();
        return $this->sendResponse(BookResource::collection($books), $count.' Books retrieved successfully.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //Nenhum form é utilizado na comunicação das APIs
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title'=>'required|string|max:100',
            'subtitle'=>'nullable|string|max:100',
            'description'=>'required|max:500',
            'ISBN'=>'required|unique:books,ISBN|min:17|max:17',
            'pages'=>'required|integer|min:1',
            'publication_date'=>'required|date|before_or_equal:today',
            'publisher_id'=>'required',
            'language_id'=>'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        //Se chegou aqui, dados válidos. Criar book.
        $book = new Book($input);
        $book->save();
        return $this->sendResponse(new BookResource($book), 'Book created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        if(is_null($book)){
            return $this->sendError(404 , "Book not found");
        }
        return $this->sendResponse(new BookResource($book), 'Book retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book) //Nenhum form é utilizado na comunicação das APIs
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $book = Book::find($id);
        if(is_null($book)){
            return $this->sendError(404 , "Book not found");
        }
        $input = $request->all();
        $validator = Validator::make($input, [
            'title'=>'required|string|max:100',
            'subtitle'=>'nullable|string|max:100',
            'description'=>'required|max:500',
            'ISBN'=>'required|min:17|max:17|unique:books,ISBN,' . $book->id,
            'pages'=>'required|integer|min:1',
            'publication_date'=>'required|date|before_or_equal:today',
            'publisher_id'=>'required',
            'language_id'=>'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        //Se chegou aqui, dados válidos. Atualizar book.
        $book->update($input);
        $book->save();
        return $this->sendResponse(new BookResource($book), 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {

    }
}
