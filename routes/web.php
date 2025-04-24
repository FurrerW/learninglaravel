<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');;
});

Route::get('/blogs', function () {
    return view('blogs');;
});

Route::get('/about', function () {
    return view('about');;
});
