<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('index');
    }

    public function create(){
        return "Bienvenido a la creacion de los cursos";
    }

    public function show($curso,$detalles=null){
        if ($detalles){
            return "Bienvenido al curso de $curso de $detalles";
        }
        return "Bienvenido al curso de $curso";
    }
}
