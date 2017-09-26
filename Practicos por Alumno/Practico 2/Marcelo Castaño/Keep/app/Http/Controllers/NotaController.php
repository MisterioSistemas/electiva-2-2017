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
    public function index()
    {
        $listaNotas = Nota::all()->toArray(); //esto es como un selec por q me va a mostrar todo

        return view('nota.index', compact('listaNotas')); //vamos a la carpeta de view y le vamos a pasar una lista de personas
        //nombre capera, archivo
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nota.create');
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
        $objNota->titulo = $request->get('titulo');
        $objNota->descripcion = $request->get('descripcion');



        $objNota->save();
        return redirect('/nota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objNota = Nota::find($id);
        return view('nota.edit', compact('objNota', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $objNota = Nota::find($id);
//        print_r($request->post());

        $objNota->titulo = $request->get('titulo');
        $objNota->descripcion = $request->get('descripcion');
        $objNota->save();
        return redirect('/nota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objNota = Nota::find($id);
        $objNota->delete();
        return redirect('/nota');
    }
    public function vermundo($id){
        $objNota = Nota::find($id);
        return "Su titulo es: " . $objNota->descripcion;
    }
}
