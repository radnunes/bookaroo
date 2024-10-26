<?php

use App\Http\Controllers\API\BookController;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
Route::get('books', function () {
    return response()->json(Book::all());
});
*/

Route::name('api.')->group(function () {
    Route::resource('books', BookController::class)
        ->parameters(['books' => 'book'])->only(['index', 'show']);
});

