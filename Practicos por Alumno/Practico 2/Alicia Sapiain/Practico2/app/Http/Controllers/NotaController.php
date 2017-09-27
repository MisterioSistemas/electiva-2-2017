<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    //
    public function index(){
        $lista = Nota::all()->toArray();
        return view('nota.index', compact('lista'));
    }

    public function create(){

    }

    public function store(Request $request){
        $nota = new Nota;
        $nota->titulo = $request->input('titulo');
        $nota->cuerpo = $request->input('cuerpo');

        $nota->save();
        /*Nota::created($request->all());*/
        return redirect('/nota/');
    }

    public function show($id){


    }

    public function edit($id){

        return view('/nota/edit');

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        $objNota = Nota::find($id);
        $objNota->delete();
        return redirect('/nota/');
        //return "Funciona";
    }
}
