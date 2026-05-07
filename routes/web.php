<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Laravel is working! 🎉';
});


Route::get('/indix', function () {
    return view('tasks.indix');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [TaskController::class, 'index'])->name('dashboard');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('tasks', TaskController::class);
    Route::post('/tasks/{task}/toggle', [TaskController::class, 'toggleComplete'])->name('tasks.toggle');
    Route::get('/analytics', [TaskController::class, 'analytics'])->name('analytics');
    Route::resource('categories', CategoryController::class)->except(['show', 'edit', 'create']);
});