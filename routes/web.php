<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard');
});
 

Route::get('/test', function () {
    return view('test');
});


Route::get('/profile', function () {
    return view('profile');
});