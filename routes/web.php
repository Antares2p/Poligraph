<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/comment', function () {
    return view('comment');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/design', function () {
    return view('design');
});

Route::get('/production', function () {
    return view('production');
});

Route::get('/tool', function () {
    return view('tool');
});