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
use App\Http\Controllers\NuevaVistaController;
use App\Http\Controllers\SegundaVistaController;
use App\Http\Controllers\TerceraVistaController;

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

 
Route::post('/password/email', [EmailController::class, 'store'])
->name('password.register');


});
Route::get('/user/register', [EmailController::class, 'index'])->name('password.email');
Route::get('/user/password', [EmailController::class, 'email'])->name('nueva-vista');
Route::post('/user/password', [EmailController::class, 'validateEmail'])->name('nueva-vista-post');


Route::post('/segunda-vista', [EmailController::class, 'validateSegundaVista'])->name('segunda-vista-post');

Route::post('/tercera-vista', [EmailController::class, 'validateTerceraVista'])->name('tercera-vista-post');

