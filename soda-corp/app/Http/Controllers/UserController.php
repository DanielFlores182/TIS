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
        $user = new User($request);
        $user -> save();
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
