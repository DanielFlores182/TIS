<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        return view('Docente.index');
    }

    public function registrar()
    {
        return view('Docente.registrarestudiante');
    }
}