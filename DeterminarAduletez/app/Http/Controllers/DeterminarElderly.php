<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DeterminarElderly extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function calculateAge(Request $request) {
        $DateOfBirth = $request->input('dateOfBirth');
        $name = $request->input('name');
        $LastName = $request->input('lastName');

        $age = date_diff(date_create($DateOfBirth), date_create('now'))->y;

        return view('welcome', compact('age', 'name', 'LastName'));
    }

    public function calculateMajorityOld(Request $request) {
        $DateOfBirth = $request->input('dateOfBirth');
        $name = $request->input('name');
        $LastName = $request->input('lastName');

        $age = date_diff(date_create($DateOfBirth), date_create('now'))->y;

        $result = $age >= 18 ? "Es mayor de edad" : "No es mayor de edad";

        return view('welcome', compact('result', 'name', 'LastName'));
    }
}


