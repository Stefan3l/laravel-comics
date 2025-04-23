<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ComicController::class, 'index'])->name('home');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');