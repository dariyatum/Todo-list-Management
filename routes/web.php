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


Route::get('/form-profile', function () {
    return view('form-profile');
});

Route::get('/profile', function () {
    return view('profile');
});
