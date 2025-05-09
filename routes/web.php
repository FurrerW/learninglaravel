<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/about', function () {
    return view('about');
})->name('about');
