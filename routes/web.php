<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PlazaPersonalController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\MateriasAbiertasController;
use App\Http\Controllers\ReticulaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\GrupoHorarioController;
use App\Http\Controllers\FechaSeguimientoController;



//Menus Inicio
Route::get('/inicio', function () {
    return view('menu2');
})->middleware(['auth', 'verified'])->name("menu2");

Route::get('/', function () {
    return view('menu1');
})->name("menu1");

Route::get('/inicio', function () {
    return view('menu2');
})->middleware(['auth', 'verified'])->name('dashboard');


//CATALOGOS
Route::get('/catalogos', function () {
    return view('catalogos.catalogos');
})->middleware(['auth', 'verified'])->name("cata");

Route::get('/horarios', function () {
    return view('catalogos.horarios');
})->middleware(['auth', 'verified'])->name("horarios");

Route::get('/proyects', function () {
    return view('catalogos.proyectos');
})->middleware(['auth', 'verified'])->name("proyectos");


//NuevasRutas practica6
Route::resource('periodos', PeriodoController::class)->middleware(['auth','verified']);

Route::resource('edificios', EdificioController::class)->middleware(['auth', 'verified']);
Route::resource('lugares', LugarController::class)->parameters(['lugares' => 'lugar']);
Route::resource('deptos', DeptoController::class)->middleware(['auth', 'verified']);
Route::resource('carreras', CarreraController::class)->middleware(['auth', 'verified']);
Route::resource('reticulas', ReticulaController::class)->middleware(['auth', 'verified']);
Route::resource('materias', MateriaController::class)->middleware(['auth', 'verified']);

Route::resource('edificios', EdificioController::class)->middleware(['auth', 'verified']);
Route::resource('lugares', LugarController::class)->parameters(['lugares' => 'lugar'])->middleware(['auth', 'verified']);
Route::resource('personals', PersonalController::class)->parameters(['personals' => 'personal'])->middleware(['auth', 'verified']);
Route::resource('personalPlazas', PlazaPersonalController::class)->middleware(['auth', 'verified']);


Route::resource('grupos', GrupoController::class)->middleware(['auth','verified' ]);
Route::resource('personalPlazas', PlazaPersonalController::class)->middleware(['auth','verified' ]);

Route::resource('materiasa', MateriasAbiertasController::class)->middleware(['auth', 'verified'::class]);
Route::get('materiasa2', [MateriasAbiertasController::class, 'vacio'])->name("materiasa.vacio")->middleware(['auth', 'verified'::class]);


Route::resource('grupos', GrupoController::class)->middleware(['auth', 'verified']);
Route::get('grupoP', [GrupoController::class, 'hola'])->name("grupos.hola")->middleware(['auth', 'verified']);
Route::resource('grupo16353', Grupo17126Controller::class)->middleware(['auth', 'verified']);

Route::resource('grupoHorario17126s', GrupoHorario17126Controller::class)->middleware(['auth', 'verified']);
Route::resource('grupoHorarios', GrupoHorarioController::class)->middleware(['auth', 'verified']);
Route::POST('grupoHorarios1/', [GrupoHorarioController::class, 'apoyo'])->name("grupoHorarios.apoyo")->middleware(['auth', 'verified']);
Route::POST('grupoHorarios2/', [GrupoHorarioController::class, 'agregarHora'])->name("grupoHorarios.agregarHora")->middleware(['auth', 'verified']);
Route::get('grupoHorarios3/', [GrupoHorarioController::class, 'vaciarS'])->name("grupoHorarios.vaciarS")->middleware(['auth', 'verified']);


Route::resource('alumnos', AlumnoController::class)->middleware(['auth','verified']);

// routes/web.php
// Mostrar todos los alumnos (index)
/* Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

// Guardar un nuevo alumno (store)
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');

// Editar un alumno (edit)
Route::get('/alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
// Actualizar un alumno (update)
Route::put('/alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');

// Eliminar un alumno (destroy)
Route::delete('/alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
/////////////////////////////// */

// Mostrar todos los alumnos (index)
Route::get('/plazas', [PlazaController::class, 'index'])->name('plazas.index');
// Guardar un nuevo alumno (store)
Route::post('/plazas', [PlazaController::class, 'store'])->name('plazas.store');
Route::get('/plazas/create', [PlazaController::class, 'create'])->name('plazas.create');
// Mostrar formulario de edición
Route::get('/plazas/{plaza}/edit', [PlazaController::class, 'edit'])->name('plazas.edit');

// Actualizar plaza
Route::put('/plazas/{plaza}', [PlazaController::class, 'update'])->name('plazas.update');

// Eliminar un alumno (destroy)
Route::delete('/plazas/{plaza}', [PlazaController::class, 'destroy'])->name('plazas.destroy');
//////////////////////////////////////////

// Mostrar todos los alumnos (index)
Route::get('/puestos', [PuestoController::class, 'index'])->name('puestos.index');

// Guardar un nuevo alumno (store)
Route::post('/puestos', [PuestoController::class, 'store'])->name('puestos.store');
// Mostrar formulario de edición

Route::get('/puestos/create', [PuestoController::class, 'create'])->name('puestos.create');
Route::get('/puestos/{puesto}/edit', [PuestoController::class, 'edit'])->name('puestos.edit');
// Actualizar puesto
Route::put('/puestos/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');
// Eliminar un alumno (destroy)
Route::delete('/puestos/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');



////////////////////////////////////

// Mostrar todas las carreras
Route::get('/carreras', [CarreraController::class, 'index'])->name('carreras.index');

// Mostrar el formulario de creación de una nueva carrera
Route::get('/carreras/create', [CarreraController::class, 'create'])->name('carreras.create');

// Almacenar una nueva carrera
Route::post('/carreras', [CarreraController::class, 'store'])->name('carreras.store');

// Mostrar el formulario de edición de una carrera existente
Route::get('/carreras/{id}/edit', [CarreraController::class, 'edit'])->name('carreras.edit');

// Actualizar una carrera existente
Route::put('/carreras/{id}', [CarreraController::class, 'update'])->name('carreras.update');

// Eliminar una carrera
Route::delete('/carreras/{id}', [CarreraController::class, 'destroy'])->name('carreras.destroy');



/////////////////////////////////////////////////////////////////////////
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
