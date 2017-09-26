<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(array $attributes = []) {
        
    }

    public function index()
    {
         $listaNotas = Nota::all()->toArray();
        return view('Notas.principal', compact('listaNotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objNota = new Nota();
        $objNota->titulo = $request->post('titulo');
        $objNota->contenido = $request->post('contenido');
        $objNota->save();
        return redirect('/Notas/principal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objNotaEditar = Nota::find($id);
        return view('Notas.principal', compact('objNotaEditar', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $objNota = new Nota();
        $idNota = $request->post('id_nota');
        $objNota = Nota::find($idNota);
        $objNota->titulo = $request->post('titulo');
        $objNota->contenido = $request->post('contenido');
        
        $objNota->save();
        return redirect('/Notas/principal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objNota = Nota::find($id);
        $objNota->delete();
        return redirect('/Notas/principal');
    }
    
    public function traerNotasAjax(){
        $listaNotas = Nota::all()->toArray();
        return $listaNotas;
    }
    
    public function traerNotaById($id)
    {
        $objNota = Nota::find($id);
        return $objNota;
    }
    
    public function traerNotasByParameter($parametro){
        $listaNotas = Nota::where('contenido','like', '%' . $parametro. '%' )->get()->toArray();
        return $listaNotas;
    }
}
