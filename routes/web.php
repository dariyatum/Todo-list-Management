<?php
use App\Http\Controllers\DashboradController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/dashboard', [DashboradController::class, 'index'])->name('dashboard');





Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('tasks', TaskController::class);
Route::get('/tasks/{task}/detail', [TaskController::class, 'show'])->name('tasks.detail');
Route::post('/tasks/{task}/toggle', [TaskController::class, 'toggleComplete'])->name('tasks.toggle');

