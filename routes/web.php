<?php
use App\Http\Controllers\TestController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Models\test;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
    Route::get('/tasks',[TaskController::class, 'index'])->name('tasks');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');





    Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');
    Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::patch('/tasks/{id}/status', [TaskController::class, 'updateStatus'])->name('tasks.update-status');
    Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');




Route::get('/tests', function () {
    return view('tests');
});
 Route::get('/tests',[TestController::class, 'index'])->name('tests');
 Route::post('/tests', [TestController::class, 'store'])->name('tests.store');



