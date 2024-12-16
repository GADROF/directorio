<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DireccionesController;
use App\Http\Controllers\UbicacionesController;
use App\Http\Controllers\PisosController;
use App\Http\Controllers\MarcaDescripcionesController;
use App\Http\Controllers\PasswordResetLinkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

    // Rutas para direcciones, ubicaciones, pisos y marcas descripciones
    Route::resource('direcciones', DireccionesController::class);
    Route::resource('ubicaciones', UbicacionesController::class);
    Route::resource('pisos', PisosController::class);
    Route::resource('marca_descripciones', MarcaDescripcionesController::class);
    Route::resource('preguntas', PreguntasController::class);

    // Ruta específica para el almacenamiento de posts
    // Esta ruta es innecesaria si ya se define con Route::resource
    // Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    // Ruta para crear posts
    // Esta ruta es innecesaria si ya se define con Route::resource
    // Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');


// Ruta para la vista de email

// Ruta para enviar enlace de restablecimiento de contraseña
Route::post('/password/email', [EmailController::class, 'store'])
->name('password.register');


});
Route::get('/email', [EmailController::class, 'index'])->name('password.email');

