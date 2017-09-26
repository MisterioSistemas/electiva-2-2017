<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $notas = Nota::all()->toArray();

        return view('nota.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('nota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $objNota = new Nota();
        $objNota->titulo = $request->post('titulo');
        $objNota->descripcion = $request->post('descripcion');
        $objNota->save();
        return redirect('/nota/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    //agregue el edit
    public function edit($id) {
        $objNota = Nota::find($id);
        return view('nota.edit', compact('objNota', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    //agregue el update
    public function update(Request $request, $id) {
        $objNota = Nota::find($id);
        $objNota->titulo = $request->post('titulo');
        $objNota->descripcion = $request->post('descripcion');

        $objNota->save();
        return redirect('/nota/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    //agregue el eliminar
    public function destroy($id) {
        $objNota = Nota::find($id);
        $objNota->delete();
        return redirect('/nota/index');
    }

    /*PHP


Route::delete('user/{id}', function ($id) {
    $user = App\User::find($id)->delete();
    return Redirect::back();
});*/
}
