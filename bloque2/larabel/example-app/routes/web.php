<?php

use App\Http\Controllers\IncidenciaController;
use App\Http\Controllers\TecnicoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Pintar todas las incidencias
//Route::get('/incidencias', IncidenciaController::class . '@index');
Route::prefix('incidencias')->group(function () {
    Route::get('', [IncidenciaController::class, 'index'])->name('incidencias.index');
    Route::get('/delete/{id}', [IncidenciaController::class, 'delete'])->name('incidencias.delete');
    Route::post('/store', [IncidenciaController::class, 'store'])->name('incidencias.store');
    Route::get('/show/{id}', [IncidenciaController::class, 'show'])->name('incidencias.show');
});
/*
Route::name('incidencias')->group(function () {
    Route::get('/incidencias', [IncidenciaController::class, 'index'])->name('incidencias.index');
    Route::get('/delete/{id}', [IncidenciaController::class, 'delete'])->name('incidencias.delete');
    Route::post('/store', [IncidenciaController::class, 'store'])->name('incidencias.store');
    Route::get('/show/{id}', [IncidenciaController::class, 'show'])->name('incidencias.show');
});*/

Route::resource('tecnicos', TecnicoController::class)->names('tecnicos');

