<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/book', function () {
    return view('book');
})->name('book');

Route::post('/book/create', [BookController::class, 'create'])->name('create');

Route::get('/books', [BookController::class, 'getAllBooks'])->name('books');
