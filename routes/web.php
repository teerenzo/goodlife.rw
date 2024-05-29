<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// contact
Route::get('/contact', function ()  {
    return view('contact');
});

// branches
Route::get('/branches', function ()  {
    return view('branches');
});

// about
Route::get('/about', function ()  {
    return view('about');
});
