<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        return "En esta pagina podras crear un curso";
    }
    public function create(){
        return "Bienvenido a la pagina de $curso, de la categoria $categoria";

    }
    public function show(){

    }
}
