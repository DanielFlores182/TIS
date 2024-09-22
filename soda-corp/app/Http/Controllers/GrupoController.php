<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function guardar(Request $request)
    {
        $datos = $request->validate([
            'lider_grupo' => 'required|max:255',
            'nombre_empresa' => 'required|max:255',
            'integrantes.*' => 'required|max:255',
        ]);

        // Aquí iría la lógica para guardar los datos en la base de datos

        return back()->with('success', 'Datos guardados correctamente!');
    }
}
