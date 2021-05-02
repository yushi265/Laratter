<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::prefix('login')->name('login.')->group(function () {
    Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('{provider}');
    Route::get('/{provider}/callback', [LoginController::class],'handleProviderCallback')->name('{provider}.callback');
});
Route::prefix('register')->name('register.')->group(function () {
    Route::get('/{provider}', [RegisterController::class],'showProviderUserRegistrationForm')->name('{provider}');
    Route::post('/{provider}', [RegisterController::class], 'registerProviderUser')->name('{provider}');
});
Route::get('/', [ArticleController::class, 'index'])->name('index');
Route::resource('/articles', ArticleController::class)->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', ArticleController::class)->only(['show']);
Route::prefix('users')->name('users.')->group(function() {
    Route::get('/{name}',[UserController::class,'show'])->name('show');
    Route::middleware('auth')->group(function() {
        Route::put('/{name}/follow', [UserController::class, 'follow'])->name('follow');
        Route::delete('/{name}/follow', [UserController::class, 'unfollow'])->name('unfollow');
    });
});

Route::prefix('articles')->name('articles.')->group(function() {
    Route::put('/{article}/like', [ArticleController::class, 'like'])->name('like');
    Route::delete('/{article}/like', [ArticleController::class, 'unlike'])->name('unlike');
});

Route::get('/tags/{name}', [TagController::class, 'show'])->name('tags.show');
