<?php

use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/inicio', function () {
    return view('login');
});


#Route::get('/docente/registrarestudiante', [DocenteController::class, 'registrar'])->name('registrarestudiante');

#Route::get('/login', function () {
 #   return view('login');
#});

#Route::get('/login', [LoginController::class, 'login'])->name('login');