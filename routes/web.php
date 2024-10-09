<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/crear', function () {
    return view('crear');
})->name('crear');

Route::get('/leer', function () {
    return view('leer');
})->name('leer');

Route::get('/actualizar', function () {
    return view('actualizar');
})->name('actualizar');

Route::get('/eliminar', function () {
    return view('eliminar');
})->name('eliminar');
