<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [HomeController::class, 'index'])->name('home');
//books
Route::resource('books', BookController::class)->only(['index', 'show']);
//authors
Route::resource('authors', AuthorController::class)->only(['index', 'show']);



Route::get('/contacts', function () {
    return view ('contacts');
})->name('contacts');

Route::middleware('guest')->group(function () {
    //register
    Route::resource('users', UserController::class);
    Route::get('/register', [UserController::class,'showRegister'])->name('register');

    //login
    Route::get('/login', [LoginController::class,'showLogin'])->name('login');
    Route::post('/login', [LoginController::class,'login']);
});

//Administradores
Route::middleware('role:admin')->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::name('admin.')->group(function () {

            //books
            Route::resource('books', BookController::class);
            //authors
            Route::resource('authors', AuthorController::class);
            //logout
            Route::post('/logout', [LoginController::class,'logout'])->name('logout')
                ->middleware('auth');
        });
    });
});


//Clientes
Route::middleware('role:client')->group(function () {
    Route::prefix('/clients')->group(function () {
        Route::name('client.')->group(function () {

            //logout
            Route::post('/logout', [LoginController::class,'logout'])->name('logout')
                ->middleware('auth');
        });
    });
});
