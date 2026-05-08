<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/tasks', function () {
    return view('tasks.index');
})->name('tasks');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('tasks/show', [TaskController::class, 'show'])->name('tasks.show');
    Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');