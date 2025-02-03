<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeterminarElderly;
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

Route::get('/', [DeterminarElderly::class, 'index']);

Route::get('/', [DeterminarElderly::class, 'index']);
Route::post('calculateAge', [DeterminarElderly::class, 'calculateAge'])->name('calculateAge');
Route::post('calculateMajorityOld', [DeterminarElderly::class, 'calculateMajorityOld'])->name('calculateMajorityOld');

