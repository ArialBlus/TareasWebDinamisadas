<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MostrarTablaMultiplicativiana;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrarTablaMultiplicativiana', [MostrarTablaMultiplicativiana::class, 'index'])
    ->name('mostrar_tabla_multiplicativa');

Route::post('/mostrarTablaMultiplicativiana/generarTabla', [MostrarTablaMultiplicativiana::class, 'generarTabla'])
    ->name('mostrar_tabla');


    