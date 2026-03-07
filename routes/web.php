<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/national', function () {
    return view('national');
});

Route::get('/special-news', function () {
    return view('special-news');
});

Route::get('/news-details', function () {
    return view('news-details');
});
