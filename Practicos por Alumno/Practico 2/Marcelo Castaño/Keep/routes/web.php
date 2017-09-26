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

Auth::routes();

Route::resource('nota', 'NotaController');

Route::get('/vermundo/{id}','NotaController@vermundo');
//Route::get('/holamu','PruebaNotaController@traerHolamundo');

Route::get('/notas/index','NotaController@index');
Route::get('/home', 'HomeController@index')->name('home');


