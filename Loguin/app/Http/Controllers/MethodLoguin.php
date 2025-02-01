<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class MethodLogin extends Controller
{
    // Mostrar formulario de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Procesar el registro
    public function register(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Aquí guardamos los datos en la sesión (solo para este ejemplo)
        Session::put('user', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Redirigir al login después de registrar
        return redirect()->route('login');
    }

    // Mostrar formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar el login
    public function login(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Verificar las credenciales (comparar con la sesión de registro)
        $user = Session::get('user');

        if ($user && $user['email'] === $request->email && $user['password'] === $request->password) {
            // Si las credenciales son correctas, se puede redirigir a una página de bienvenida
            return redirect()->route('welcome');
        }

        // Si las credenciales no coinciden
        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    // Método para cerrar sesión
    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }
}

