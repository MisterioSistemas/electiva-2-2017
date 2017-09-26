<?php

namespace App\Http\Controllers;

use App\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Notas::all()->toArray();
        return view('notas.index', compact('lista'));
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
        $nuevaNota = new Notas;
        $nuevaNota->titulo = $request->input('titulo');
        $nuevaNota->texto = $request->input('nota');
        $nuevaNota->save();

        return redirect('/notas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function show(Notas $notas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function edit($nota_id)
    {
        return view('notas.editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notas $notas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function destroy($ntoa_id)
    {
        $notaEliminar = Notas::find($ntoa_id);
        $notaEliminar->delete();

        return redirect('/notas');
    }
}
