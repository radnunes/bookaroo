<?php

use App\Http\Controllers\API\AuthorController;
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\RegisterController;
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

//Login
Route::post('login', [LoginController::class, 'login']);

//Register
Route::post('register', [RegisterController::class, 'register']);

//Protected routes **************
Route::middleware('auth:sanctum')->group(function () {
    Route::middleware('role:admin')->group(function () {
        //Books
        Route::name('api.')->group(function () {
            Route::resource('books', BookController::class)
                ->parameters(['books' => 'book'])->only(['store', 'update']);
        });

        //Authors
        Route::name('api.')->group(function () {
            Route::resource('authors', AuthorController::class)
                ->parameters(['authors' => 'author'])->only(['store', 'update']);
        });
    });


    //Rota teste
    Route::get('teste', function () {
        return response()->json('isto é um teste da rota autenticada');
    });

    //Logout
    Route::get('logout', [LoginController::class, 'logout']);

});

//Public books
Route::name('api.')->group(function () {
    Route::resource('books', BookController::class)
        ->parameters(['books' => 'book'])->only(['index', 'show']);
});

//Public authors
Route::name('api.')->group(function () {
    Route::resource('authors', AuthorController::class)
        ->parameters(['authors' => 'author'])->only(['index', 'show']);
});



