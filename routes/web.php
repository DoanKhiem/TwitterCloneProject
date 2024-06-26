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

Route::group(['prefix' => 'ideas', 'as' => 'ideas.', 'middleware' => 'auth'], function () {
    Route::post('', [IdeaController::class, 'store'])->name('store')->withoutMiddleware('auth');
    Route::get('/{idea}', [IdeaController::class, 'show'])->name('show')->withoutMiddleware('auth');
    Route::get('/{idea}/edit', [IdeaController::class, 'edit'])->name('edit');
    Route::put('/{idea}/update', [IdeaController::class, 'update'])->name('update');
    Route::delete('/{idea}', [IdeaController::class, 'destroy'])->name('destroy');
    Route::post('/{idea}/comments', [CommentController::class, 'store'])->name('comment.store');
});


Route::get('/terms', function () {
    return view('terms');
});
