<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\scripts\planilla;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registrarPlanilla(Request $request)
    {
        $extend_file = $request->file('archivo')->getClientOriginalExtension();
        $name_file = 'data_sheet.'.$extend_file;
        $request->file('archivo')->storeAs('public/files/',$name_file);
        $reader = new planilla();
        $data = $reader->leerExcel('C:\Users\chamb\Documents\GitHub\TIS\soda-corp\public\storage\files\\'.$name_file);
        foreach ($data as $d) {
            $estudiante = new user();
            $estudiante->create([
                'nombre' => $d->nombre_estudiante
            ]);

            estudiande::create([
                'id_estudiante' => $estudiante->id_user,
                'cod_sis' => $d->cod_sis
            ]);

        }
        return response()->json(["data" => json_encode($data)], 200);
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
            'codsis' => 'required|numeric|digits:9|unique:estudiantes,codsis',
            'correo' => 'required|string|unique:estudiantes,correo',
            'carrera' => 'required|string|in:Ing. Sistemas,Ing. Informática',
        ]);

        // Crear un nuevo estudiante
        $estudiante = new Estudiante();
        $estudiante->nombres = $request->nombres;
        $estudiante->codsis = $request->codsis;
        $estudiante->correo = $request->correo;
        $estudiante->carrera = $request->carrera;
        $estudiante->save();

        // Redireccionar con un mensaje de éxito
        return redirect()->route('registrarestudiante')->with('success', 'Estudiante registrado correctamente.');
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
