<?php
namespace App\Http\Controllers;
use App\notas;
use Illuminate\Http\Request;
class notasController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$listaNotas = notas::all()->toArray();
		return view('home', compact('listaNotas'));
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
		
		$notas = notas::create($request->all());
	//  $listaNotas = notas::all()->toArray();
	return response()->json($notas);
}
	
	public function notas(Request $request)
	{
		$tasks = notas::all();
		return $tasks;
	}
	/**
	* Display the specified resource.
	*
	* @param  \App\notas  $notas
	* @return \Illuminate\Http\Response
	*/
	public function show(notas $notas)
	{
		//
	}
	public function notass(Request $request)
	{
		$valor =  $request->input('value');
		if($valor == ""){
		$tasks = notas::all();
		return  response()->json($tasks);
		}else{
				$notas =  notas::where('titulo','like', '%' . $request->input('value'). '%' )->orWhere('nota', 'like', '%' . $request->input('value'). '%')->get();
			return  response()->json($notas);
}
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