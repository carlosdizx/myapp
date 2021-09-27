<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //aqui se crean los metodos

    public function __invoke(): string
    {
        return "Bienvenido a la pagina principal";
    }
}
