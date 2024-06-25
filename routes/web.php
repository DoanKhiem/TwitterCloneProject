<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/idea', [IdeaController::class, 'store'])->name('idea.store');
Route::get('/idea/{idea}', [IdeaController::class, 'show'])->name('idea.show');
Route::get('/idea/{idea}/edit', [IdeaController::class, 'edit'])->name('idea.edit');
Route::put('/idea/{idea}/update', [IdeaController::class, 'update'])->name('idea.update');
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->name('ideas.destroy');

Route::post('/idea/{idea}/comments', [CommentController::class, 'store'])->name('idea.comment.store');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::get('/terms', function () {
    return view('terms');
});
