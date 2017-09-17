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
    return view('home');
});

Auth::routes();

Route::get('/persona/traerajax','PersonaController@traerPersonasAjax');
Route::get('/holamundo','PruebaController@traerHolaMundo');
Route::get('/pruebaajax','PruebaController@verPrueba');


Route::get('/prueba/{id}','PersonaController@prueba');

//Route::get('/persona/ver/{id}','PersonaController@ver');

Route::resource('persona', 'PersonaController');

Route::get('/home', 'HomeController@index')->name('home');

