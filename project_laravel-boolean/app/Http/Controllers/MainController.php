<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function holaTodo() {
        return 'hola usuarios';
    }

    public function holaTu() {
        return view('holaTu', [
            'nombre' => 'Davide'
        ]);
    }

    public function holaTu2() {
        return view('holaTu', [
            'nombre' => 'Perla'
        ]);
    }
}
