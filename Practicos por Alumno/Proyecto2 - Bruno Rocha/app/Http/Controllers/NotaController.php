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
        $lista = Nota::all()->toArray();
        return view('nota', compact('lista'));
        //return view('prueba');
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevaNota = Nota::create($request->all());
        return response()->json($nuevaNota);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function edit(Nota $nota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $objNota = Nota::find($id);
        $objNota->delete();
        return redirect('/nota');
    }

    public function buscar(Request $request)
    {
        $resp = $request->input('key');
        if ($resp != "") {
            $consulta = Nota::where('titulo', 'like', '%' . $request->input('key') . '%')->orWhere('descripcion', 'like', '%' . $request->input('key') . '%')->get();
            return response()->json($consulta);
        } else {
            $res = Nota::all();
            return response()->json($res);
        }
    }
}
