<?php

use App\Http\Controllers\EncuestaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\VotacionesController;

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
//Rutas de autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta del Raiz
//Route::get('/',[VotacionesController::class,'index'])->name('votar.index');
Route::get('/',[EncuestaController::class,'index'])->name('encuestar.index');
Route::post('/encuestar',[EncuestaController::class,'store'])->name('encuestar.store');
Route::get('/encuestado',[EncuestaController::class,'completa'])->name('encuesta.completa');
//Route::get('/',[ServicioController::class,'index'])->middleware(['auth', 'verified'])->name('servicios.index');
// Rutas de servicios
Route::get('/dashboard',[ServicioController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/servicio_crear',[ServicioController::class,'create'])->middleware(['auth', 'verified'])->name('servicios.create');

// Rutas de Votación
Route::get('/votar',[VotacionesController::class,'index'])->name('votar.index');
Route::post('/votar',[VotacionesController::class,'store'])->name('votar.store');
Route::get('/votado',[VotacionesController::class,'votado'])->name('votar.votado');
Route::get('/salir',[VotacionesController::class,'salir'])->name('votar.salir');
// Servicios Formulario


require __DIR__.'/auth.php';
