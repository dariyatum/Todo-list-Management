<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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



Route::get('/profile', [ProfileController::class, 'index']);

Route::post('/profile/store', [ProfileController::class, 'store'])
    ->name('profile.store');