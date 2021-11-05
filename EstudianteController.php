<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        return view('raizestudiante');
    }

    public function crear(){
        return "Ruta Crear";
    }
}
