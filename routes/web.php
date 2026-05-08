<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/mytasks', function () {
    return view('mytasks.index');
})->name('mytasks');