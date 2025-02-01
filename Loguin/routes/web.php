<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar el formulario de registro
Route::get('/register', [MethodLogin::class, 'showRegisterForm'])->name('register');

// Ruta para procesar el registro
Route::post('/register', [MethodLogin::class, 'register']);

// Ruta para mostrar el formulario de login
Route::get('/login', [MethodLogin::class, 'showLoginForm'])->name('login');

// Ruta para procesar el login
Route::post('/login', [MethodLogin::class, 'login']);

// Ruta para cerrar sesión
Route::post('/logout', [MethodLogin::class, 'logout'])->name('logout');

// Ruta para la página de bienvenida después de login exitoso
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
