<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;

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

Route::get('/branches/{name}', [BranchController::class, 'show'])->name('branches.show');

// about
Route::get('/about', function ()  {
    return view('about');
});

// Branches review 
Route::get('/branch_overview', function(){
    return view('branch_overview');
});

//CSI Project
Route::get('/csi-project', function(){
    return view('csi-project');
});