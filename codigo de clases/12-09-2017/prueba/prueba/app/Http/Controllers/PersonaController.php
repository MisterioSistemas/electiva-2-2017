<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $listaPersonas = Persona::all()->toArray();
        return view('persona.index', compact('listaPersonas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $objPersona = new Persona();
        $objPersona->nombre = $request->post('nombre');
        $objPersona->apellido = $request->post('apellido');
        $objPersona->ciudad = $request->post('ciudad');
        $objPersona->edad = $request->post('edad');
        $objPersona->save();
        return redirect('/persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $objPersona = Persona::find($id);
        return view('persona.edit', compact('objPersona', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $objPersona = Persona::find($id);
        $objPersona->nombre = $request->post('nombre');
        $objPersona->apellido = $request->post('apellido');
        $objPersona->ciudad = $request->post('ciudad');
        $objPersona->edad = $request->post('edad');
        $objPersona->save();
        return redirect('/persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $objPersona = Persona::find($id);
        $objPersona->delete();
        return redirect('/persona');
    }

}
