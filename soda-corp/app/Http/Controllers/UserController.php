<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(){
        $users = User::all();
        return $users;
    }
    public function store(Request $request){

        $request ->validate([
            'nombre'=> ['required', 'string', 'max:30'],
            'password'=>['required', 'string', 'min:7'],
            'tipo'=>['required', 'integer'],
            'email'=>['required', 'string', 'email','max:20',],

        ]);
        $user = User::create([
            'nombre' => $request->input('nombre'), // Nombre que viene del formulario
            'email' => $request->input('email'), // Email del formulario
            'password' => Hash::make($request->input('password')), // Hashear la contraseña
            'tipo' => $request->input('tipo'),
        ]);
        return response()->json([
            'status' => 200, 
            'message' => "Registro exitoso"
        ]);
    }
    public function show($id){
        $user = User:: find($id);
        return $user;
    }
}
