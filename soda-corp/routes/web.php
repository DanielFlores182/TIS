<?php

use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;



Route::get('/inicio', function () {
    return view('inicio');
});


Route::get('/docente/registrarestudiante', [DocenteController::class, 'registrar'])->name('registrarestudiante');
