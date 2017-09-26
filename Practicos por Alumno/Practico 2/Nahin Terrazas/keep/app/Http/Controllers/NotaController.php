<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller {

    //
    public function index() {
        $listaNotas = Nota::all()->toArray();
        return view('home', compact('listaNotas'));
    }

    public function buscar($id) {
//             return "hola";
//        $resultado = Nota::
        if ($id == null) {
            $listaNotas = Nota::all()->toArray();
//             return $listaNotas;
            return 'hola';
        }

//        $listaNotas = Nota::Where([['titulo', 'LIKE', '%'.$id.'%'],
//                ['descripcion', 'LIKE', '%'.$id.'%']]
//                )->get();

        $listaNotas = Nota::Where('titulo', 'LIKE', '%' . $id . '%'
                )->orWhere('descripcion', 'LIKE', '%' . $id . '%')->get();


//        $listaNotas = Nota::where('descripcion', 'LIKE', '%'.$id.'%'
//                )->get();
//        $listaNotas = $listaNota
        return $listaNotas;
//        return "hola";
    }

    public function buscartodos() {
        $listaNotas = Nota::all()->toArray();
        return $listaNotas;
    }
    public function agregar($titulo,$desc) {
        $nota = new Nota();
        $nota->titulo  = $titulo ;
        $nota->descripcion  = $desc ;
        $nota->save();
        $listaNotas = Nota::all()->toArray();
        return $listaNotas;
    }
    public function editar($titulo,$desc,$id) {
        $nota =  Nota::where('id',$id) -> first();
        $nota->titulo  = $titulo ;
        $nota->descripcion  = $desc ;
        $nota->save();
        $listaNotas = Nota::all()->toArray();
        return $listaNotas;
    }

    
    
    
    public function destroy($id) {
        Nota::destroy($id);
        $listaNotas = Nota::all()->toArray();
        return $listaNotas;
        //
    }

}
