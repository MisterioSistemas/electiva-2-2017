<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function traerHolaMundo(){
        return "Hola Mundo";
    }
    public function verPrueba(){
        return view('pruebaajax');
    }
}
