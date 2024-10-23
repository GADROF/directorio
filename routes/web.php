<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome')


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('show');
Route::resource('posts', PostController::class);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
});
