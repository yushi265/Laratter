<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', [ArticleController::class, 'index'])->name('index');
Route::resource('/articles', ArticleController::class)->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', ArticleController::class)->only(['show']);
Route::prefix('users')->name('users.')->group(function() {
    Route::get('{id}/show',[UserController::class,'show'])->name('show');
});

Route::prefix('articles')->name('articles.')->group(function() {
    Route::put('/{article}/like', [ArticleController::class, 'like'])->name('like');
    Route::delete('/{article}/like', [ArticleController::class, 'unlike'])->name('unlike');
});
