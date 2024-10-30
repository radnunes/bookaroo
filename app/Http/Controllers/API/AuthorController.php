<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count = Author::count();
        $authors = Author::all();
        return $this->sendResponse(AuthorResource::collection($authors), $count.' Authors retrieved successfully.');
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
        $input = $request->all();
        $validator = Validator::make($input, [
            'name'=>'required|max:100',
            'bio'=>'required|max:250',
            'nationality'=>'required|max:30',
            'birthdate'=>'required',
            'gender'=>'required|in:M,F',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        //Se chegou aqui, dados válidos.
        $author = new Author($input);
        $author->save();
        return $this->sendResponse(new AuthorResource($author), 'Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Author::find($id);
        if(is_null($book)){
            return $this->sendError(404,'Author not found.');
        }

        return $this->sendResponse(new AuthorResource($book), 'Author retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $author = Author::find($id);
        if(is_null($author)){
            return $this->sendError(404,'Author not found.');
        }
        $input = $request->all();
        $validator = Validator::make($input, [
            'name'=>'required|max:100',
            'bio'=>'required|max:250',
            'nationality'=>'required|max:30',
            'birthdate'=>'required',
            'gender'=>'required|in:M,F',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        //Se chegou aqui, dados válidos.
        $author->update($input);
        $author->save();
        return $this->sendResponse(new AuthorResource($author), 'Author updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
