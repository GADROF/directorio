<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rutas de autenticación
Auth::routes();

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Ruta del home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Rutas para posts
    Route::resource('posts', PostController::class);
});