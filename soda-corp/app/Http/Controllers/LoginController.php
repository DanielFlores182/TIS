<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    //aunteticacion paso de chat paso3
    public function authenticate(Request $request)
    {
        Log::info(json_encode($request));
        // Validar los datos del formulario
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Intentar iniciar sesión
        error_log(json_encode(['email' => $request->email, 'password' => ($request->password)]));
      //if (Auth::attempt(['email' => $request->email, 'password' => ($request->password)])) {   // TODO arreglar esto  // no funca // necesitamos encriptar?
        //[john = pass word ] <= buscar  en hardcodeo 
       //if (true) {
            // Si la autenticación es exitosa, redirige al layout o página principal
            error_log("WE DID IT :D");
            $request->session()->regenerate();
            return redirect()->intended('/inicio'); // Aquí ajustas la ruta de tu página principal
        }
        error_log("COULDNT MAKE IT :(");
        // Si la autenticación falla, redirige de vuelta con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }
    
}