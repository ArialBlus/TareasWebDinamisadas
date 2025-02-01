<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MostrarTablaMultiplicativiana extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function generarTabla(Request $request)
    {
        $numero = $request->input('numero');
        $tabla = [];
        for ($i = 1; $i <= 10; $i++) {
            $tabla[] = $numero * $i;
        }
        return view('mostrarTablaMultiplicativiana', ['tabla' => $tabla, 'numero' => $numero]);
    }
}