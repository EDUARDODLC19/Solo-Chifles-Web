<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required|email',
            'password' => 'required'
        ]);

        $usuariosValidos = [
            'admin@solochifles.com' => '12345'
        ];

        $usuario = $request->input('username');
        $contrasena = $request->input('password');

        if (isset($usuariosValidos[$usuario]) && $usuariosValidos[$usuario] === $contrasena) {
            Session::put('usuario', $usuario);
            return redirect('/admin');  // Cambia según tu ruta real
        } else {
            return redirect('/login')->with('error', 'Credenciales incorrectas.');
        }
    }

    public function logout() {
        Session::flush();
        return redirect('/login');
    }
}
