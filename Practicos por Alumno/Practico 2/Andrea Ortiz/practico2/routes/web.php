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
    return view('welcome');
});


//http://127.0.0.1:8000


Auth::routes();

Route::resource('bloque', 'BloqueController');


Route::get('/home', 'HomeController@index')->name('home');


//con eso automaticamente cuando yo llame a persona index, me va a mostrar persona index, cuando llame a los otros me mostrara los otros

//Route::get('/bloque', 'BloqueController@index');




