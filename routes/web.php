<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use Illuminate\Support\Facades\Route;

//Ruta Principal
Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
// Rutas para GUARDAR
Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
// Rutas para EDITAR
Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
//Ruta para eliminar
Route::post('/alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');


//Deptos
//Route::get('/deptos.index', [AlumnoController::class, 'index'])->name('deptos.index');
// Rutas para GUARDAR
//Route::get('/deptos.create', [AlumnoController::class, 'create'])->name('deptos.create');
//Route::post('/deptos.store', [AlumnoController::class, 'store'])->name('deptos.store');
// Rutas para EDITAR
//Route::get('/deptos.edit/{depto}', [AlumnoController::class, 'edit'])->name('deptos.edit');
//Route::post('/deptos.update/{depto}', [AlumnoController::class, 'update'])->name('deptos.update');
//Ruta para eliminar
//Route::post('/deptos.destroy/{depto}', [AlumnoController::class, 'destroy'])->name('deptos.destroy');
//Route::get('/deptos.show/{depto}', [AlumnoController::class, 'show'])->name('deptos.show');



//PUESTOS
Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
// Rutas para GUARDAR
Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
// Rutas para EDITAR
Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');
//Ruta para eliminar
Route::post('/puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');

//Route::resource("puestos",PuestoController::class);  ///otro forma diferente






Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
