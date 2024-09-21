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

Route::get('/registro', function () {
    return view('registro');
});
//Route::get('/login', [LoginController::class, 'login'])->name('login');
//Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
//luego de presionar el boton paso2 de chat
//Route::post('/inicio-sesion', [LoginController::class, 'authenticate'])->name('login');

#Route::get('/docente/registrarestudiante', [DocenteController::class, 'registrar'])->name('registrarestudiante');

#Route::get('/login', function () {
 #   return view('login');
#});

#Route::get('/login', [LoginController::class, 'login'])->name('login');