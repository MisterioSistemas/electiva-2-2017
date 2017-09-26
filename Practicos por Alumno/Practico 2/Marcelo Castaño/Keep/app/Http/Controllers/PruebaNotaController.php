<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaNotaController extends Controller
{
    //
    public function  traerHolamundo(){
        return "hola mundo";
    }

    public function  verajax(){
        return view('home');
    }
}
