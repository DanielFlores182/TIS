<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estudiantes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function create()
    {
        return view('docente.registrarestudiante');
    }


    public function registrar()
    {
        return view('docente.registrarplanilla');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'codsis' => 'required|string|unique:estudiantes,codsis',
            'carnet' => 'required|string|unique:estudiantes,carnet',
        ]);

        // Crear un nuevo estudiante
        $estudiante = new Estudiante();
        $estudiante->nombres = $request->nombres;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->codsis = $request->codsis;
        $estudiante->carnet = $request->carnet;
        $estudiante->save();

        // Redireccionar con un mensaje de éxito
        return redirect()->route('estudiantes.create')->with('success', 'Estudiante registrado correctamente.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
