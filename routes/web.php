<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view ('template.parts.login');
})->name('login');

Route::get('/register', function () {
    return view ('template.parts.register');
})->name('register');
