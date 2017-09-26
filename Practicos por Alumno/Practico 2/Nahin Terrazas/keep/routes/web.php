<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//   return Route::resource('/Nota', 'NotaController');
    return view('home');
});

Auth::routes();
Route::resource('/nota', 'NotaController');
Route::get('/buscar/{id}','NotaController@buscar');
Route::get('/buscar/','NotaController@buscartodos');
Route::get('/borrar/{id}','NotaController@destroy');
Route::get('/agregar/{titulo}/{desc}','NotaController@agregar');
Route::get('/agregar/{titulo}/{desc}/{id}','NotaController@editar');
