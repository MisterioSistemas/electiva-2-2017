<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notas;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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

        $data = [
            'titulo' => request['titulo'],
            'nota' => request['nota']
        ];

        return $data;
    }
  public function NotasInsert($id, Request $request)
    {

        return $request->all();
        //notas::create($request->all(););
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function show($notas)
    {
        notas::where('titulo', 'LIKE', '%notas%')->orwhere('nota', 'LIKE', '%notas%') ->get();
    }
  public function notass($notas)
    {
        notas::where('titulo', 'LIKE', '%notas%')->orwhere('nota', 'LIKE', '%notas%') ->get();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function edit(notas $notas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notas $notas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notas  $notas
     * @return \Illuminate\Http\Response
     */
    public function destroy(notas $notas)
    {
        //
    }
}
