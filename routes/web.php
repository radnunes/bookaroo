<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

//login
Route::get('/login', [LoginController::class,'showLogin'])->name('login');
Route::post('/login', [LoginController::class,'login']);

//logout
Route::post('/logout', [LoginController::class,'logout'])->name('logout')
    ->middleware('auth');



Route::get('/login', function () {
    return view ('login');
})->name('login');

Route::get('/register', function () {
    return view ('register');
})->name('register');


Route::get('/', [BookController::class, 'index'])->name('home');

//Administradores
Route::middleware('role:admin')->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::name('admin.')->group(function () {

            //books
            /*Route::resource('books', BookController::class);
            Route::get('/books/genres', [BookController::class, 'genres'])->name('books.genres');
            Route::get('/books/decades', [BookController::class, 'decades'])->name('books.decades');
            Route::get('/books/languages', [BookController::class, 'languages'])->name('books.languages');
            Route::get('/books/format', [BookController::class, 'format'])->name('books.format');*/

            //authors
            /*Route::resource('authors', AuthorController::class);
            Route::get('/authors/nationality', [AuthorController::class, 'nationalities'])->name('authors.nationality');
            Route::get('/authors/literary_movements', [AuthorController::class, 'literary_movements'])->name('authors.literary_movements');*/

            //Dashboard
            //Route::get('dashboard',[DashboardController::class,'admin'])->name('dashboard');
        });
    });
});


//Clientes
Route::middleware('role:client')->group(function () {
    Route::prefix('/clients')->group(function () {
        Route::name('client.')->group(function () {

            //books
            /*Route::resource('books', BookController::class)->only(['index', 'show']);
            Route::get('/books/genres', [BookController::class, 'genres'])->name('books.genres');
            Route::get('/books/decades', [BookController::class, 'decades'])->name('books.decades');
            Route::get('/books/languages', [BookController::class, 'languages'])->name('books.languages');
            Route::get('/books/format', [BookController::class, 'format'])->name('books.format');

            //authors
            Route::resource('authors', AuthorController::class)->only(['show']);
            Route::get('/authors/nationality', [AuthorController::class, 'nationalities'])->name('authors.nationality');
            Route::get('/authors/literary_movements', [AuthorController::class, 'literary_movements'])->name('authors.literary_movements');*/


            //Dashboard
            //Route::get('dashboard',function (){ return view('dashboards.client'); })->name('dashboard');

        });
    });
});


Route::resource('books', BookController::class);
Route::get('/books/genres', [BookController::class, 'genres'])->name('books.genres');
Route::get('/books/decades', [BookController::class, 'decades'])->name('books.decades');
Route::get('/books/languages', [BookController::class, 'languages'])->name('books.languages');
Route::get('/books/format', [BookController::class, 'format'])->name('books.format');

//authors
Route::resource('authors', AuthorController::class);
Route::get('/authors/nationality', [AuthorController::class, 'nationalities'])->name('authors.nationality');
Route::get('/authors/literary_movements', [AuthorController::class, 'literary_movements'])->name('authors.literary_movements');


Route::get('/contacts', function () {
    return view ('contacts');
})->name('contacts');
