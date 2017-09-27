<?php

namespace App\Http\Controllers;

use App\Bloque;
use Illuminate\Http\Request;

class BloqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaBloques = Bloque::all()->toArray(); //esto es como un selec por q me va a mostrar todo

        return view('bloque.index', compact('listaBloques')); //vamos a la carpeta de view y le vamos a pasar una lista de personas
        //nombre capera, archivo
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bloque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objBloque = new Bloque();
        $objBloque->titulo = $request->get('titulo');
        $objBloque->descripcion = $request->get('descripcion');



        $objBloque->save();
        return redirect('/bloque');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function show(Bloque $bloque)
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
        $objBloque = Bloque::find($id);
        return view('bloque.edit', compact('objBloque', 'id'));
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
        $objBloque = Bloque::find($id);
//        print_r($request->post());

        $objBloque->titulo = $request->get('titulo');
        $objBloque->descripcion = $request->get('descripcion');
        $objBloque->save();
        return redirect('/bloque');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bloque  $bloque
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objBloque = Bloque::find($id);
        $objBloque->delete();
        return redirect('/bloque');
    }

    public function buscar(Request $request)
    {
        $valor =  $request->input('value');
        if($valor == ""){
            $tasks = bloque::all();
            return  response()->json($tasks);
        }else{
            $bloques =  bloque::where('titulo','like', '%' . $request->input('value'). '%' )->orWhere('descripcion', 'like', '%' . $request->input('value'). '%')->get();
            return  response()->json($bloques);
        }
    }

}
