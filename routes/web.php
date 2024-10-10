<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('home');
})->name('home');

Route::get('/login', function () {
    return view ('login');
})->name('login');

Route::get('/register', function () {
    return view ('register');
})->name('register');
//resource
Route::resource('books', BookController::class);

Route::get('/books-genres', [BookController::class, 'genres'])->name('books.genres');

Route::get('/books-decades', [BookController::class, 'decades'])->name('books.decades');

Route::get('/books-create', [BookController::class, 'create'])->name('books.create');

Route::get('/books-{book}-edit', [BookController::class, 'edit'])->name('books.edit');

Route::get('/books-{book}-destroy', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/books-languages', [BookController::class, 'languages'])->name('books.languages');

Route::get('/books-format', [BookController::class, 'format'])->name('books.format');










