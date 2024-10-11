<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('home');

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

Route::get('/books-{id}-show', [BookController::class, 'show'])->name('books.show');

Route::get('/books-languages', [BookController::class, 'languages'])->name('books.languages');

Route::get('/books-format', [BookController::class, 'format'])->name('books.format');

Route::resource('authors', AuthorController::class);

Route::get('/authors-create', [AuthorController::class, 'create'])->name('authors.create');

Route::get('/authors-{author}-edit', [AuthorController::class, 'edit'])->name('authors.edit');

Route::get('/authors-{author}-destroy', [AuthorController::class, 'destroy'])->name('authors.destroy');

Route::get('/authors-nationality', [AuthorController::class, 'nationalities'])->name('authors.nationality');

Route::get('/contacts', function () {
    return view ('contacts');
})->name('contacts');











