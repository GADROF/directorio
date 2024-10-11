<?php

use App\Http\Controllers\DireccionController;
use App\Models\DiscadoDirecto;
use App\Models\PuertoDeEnlace;
use App\Models\RangoExtPiso;
use App\Models\Ubicacion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::resource('posts', PostController::class);
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


Route::resource('direccion-mac', DireccionMacController::class);
Route::resource('bienes-id-de-cliente', BienesIdDeClienteController::class);
Route::resource('ip', IpController::class);
Route::resource('marca-descripcion', MarcaDescripcionController ::class);
Route::resource('modelo-nombre-de-host', ModeloNombreDeHostController::class);
Route::resource('puerto-de-enlace', PuertoDeEnlaceController::class);
Route::resource('direccion', DireccionController::class);
Route::resource('discado-diecto', DiscadoDirectoController::class);
Route::resource('ext', extController::class);
Route::resource('piso', PisoController::class);
Route::resource('rango-ext-piso', RangoExtPisoController::class);
Route::resource('ubicacion', UbicacionController::class);








Route::get('/directorios', [DirectorioController::class, 'index'])->name('directorios.index');
Route::get('/directorios/crear', [DirectorioController::class, 'create'])->name('directorios.create');
Route::post('/directorios', [DirectorioController::class, 'store'])->name('directorios.store');
Route::get('/directorios/{directorio}', [DirectorioController::class, 'show'])->name('directorios.show');
Route::get('/directorios/{directorio}/editar', [DirectorioController::class, 'edit'])->name('directorios.edit');
Route::put('/directorios/{directorio}', [DirectorioController::class, 'update'])->name('directorios.update');
Route::delete('/directorios/{directorio}', [DirectorioController::class, 'destroy'])->name('directorios.destroy');



use App\Http\Controllers\DirectorioController;

Route::get('/directorio/crear', [DirectorioController::class, 'create'])->name('directorio.crear');
Route::post('/directorio', [DirectorioController::class, 'store'])->name('directorio.store');

