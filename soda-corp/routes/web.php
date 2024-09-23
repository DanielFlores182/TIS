<?php

use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/docente/registrarestudiante', [DocenteController::class, 'registrar'])->name('registrarestudiante');

Route::get('/docente/registrarestudiante', [estudiantes::class, 'create'])->name('registrarestudiante');
Route::post('/estudiantes', [estudiantes::class, 'store'])->name('estudiantes.store');

Route::post('/docente/registrarplanilla', [estudiantes::class, 'registrarPlanilla'])->name('registrarestudiantes');
Route::get('/docente/registrarplanilla',[estudiantes::class,'registrar'])->name('vistaregistrarestudiantes');