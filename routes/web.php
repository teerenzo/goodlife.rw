<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cdn-cgi/rum/${id}',function (){
    
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
