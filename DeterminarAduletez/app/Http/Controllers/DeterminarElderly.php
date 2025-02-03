<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeterminarElderly extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function calculateAge(Request $request) {
        $request->validate([
            'dateOfBirth' => 'required|date|before:today',
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255'
        ]);

        $dateOfBirth = $request->input('dateOfBirth');
        $name = $request->input('name');
        $lastName = $request->input('lastName');

        $age = date_diff(date_create($dateOfBirth), date_create('now'))->y;

        return view('welcome', compact('age', 'name', 'lastName'));
    }

    public function calculateMajorityOld(Request $request) {
        $request->validate([
            'dateOfBirth' => 'required|date|before:today',
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255'
        ]);

        $dateOfBirth = $request->input('dateOfBirth');
        $name = $request->input('name');
        $lastName = $request->input('lastName');

        $age = date_diff(date_create($dateOfBirth), date_create('now'))->y;
        $result = $age >= 18 ? "Es mayor de edad" : "No es mayor de edad";

        return view('welcome', compact('result', 'name', 'lastName'));
    }
}




