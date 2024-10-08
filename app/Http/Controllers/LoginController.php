<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    
    public function login(Request $request)
    {
       
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

       
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
           
            return response()->json([
                'status' => true,
                'message' => 'Inicio de sesión exitoso',
            ]);
        } else {
         
            return response()->json([
                'status' => false,
                'message' => 'Credenciales incorrectas',
            ]);
        }
    }

    
    public function cerrarSession()
    {
        Auth::logout();
        return response()->json([
            'status' => true,
            'message' => 'Sesión cerrada exitosamente',
        ]);
    }
}
