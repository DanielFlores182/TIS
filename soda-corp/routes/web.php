<?php

use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;



Route::get('/inicio', function () {
    return view('inicio');
});


<<<<<<< Updated upstream
Route::get('/docente/registrarestudiante', [DocenteController::class, 'registrar'])->name('registrarestudiante');
=======
Route::get('/docente/index', [DocenteController::class, 'index'])->name('docente');

Route::get('/docente/registrarestudiante', [estudiantes::class, 'create'])->name('registrarestudiante');
Route::post('/estudiantes', [estudiantes::class, 'store'])->name('estudiantes.store');

Route::get('/docente/registrarplanilla', [estudiantes::class, 'registrar'])->name('registrarestudiantes');
>>>>>>> Stashed changes
