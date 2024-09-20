<?php
use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar la vista registrar_grupo
Route::get('/registro', function () {
    return view('registrar_grupo');
})->name('registro');

// Ruta para mostrar la vista informacion_grupo
Route::get('/informacion', function () {
    return view('informacion_grupo');
})->name('informacion');

Route::controller(Test::class)->group(function () {
    Route::get('/test', 'test');
});
