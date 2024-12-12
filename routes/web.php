<?php

use App\Models\MarcaDescripciones;
use App\Models\Pisos;
use App\Models\Ubicaciones;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DireccionesController;
use App\Http\Controllers\UbicacionesController;
use App\Http\Controllers\PisosController;
use App\Http\Controllers\MarcaDescripcionesController;

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

    // Rutas para Direccion, Ubicacion y Piso
    Route::resource('direcciones', DireccionController::class);
    Route::resource('ubicaciones', UbicacionController::class);
    Route::resource('pisos', PisoController::class);

    // Ruta específica para el almacenamiento de posts
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    

    Route::resource('direcciones', DireccionesController::class);

    Route::resource('ubicaciones', UbicacionesController::class);

    Route::resource('pisos', PisosController::class);

    Route::resource('marca_descripciones', MarcaDescripcionesController::class);


    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');



// use App\Http\Controllers\DireccionController;
// use App\Http\Controllers\UbicacionController;
// use App\Http\Controllers\PisoController;
// use App\Http\Controllers\MarcaDescripcionController;

Route::resources([
    'posts' => PostController::class,
    'direcciones' => DireccionController::class,
    'ubicaciones' => UbicacionController::class,
    'pisos' => PisoController::class,
    'marca-descripciones' => MarcaDescripcionController::class,
]);


});