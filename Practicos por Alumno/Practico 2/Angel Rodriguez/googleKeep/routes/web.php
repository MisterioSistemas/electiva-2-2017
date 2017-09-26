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

Route::get('Notas/principal', function () {
    return view('Notas/principal');
});

Auth::routes();

Route::get('/Notas/principal/{id}/edit','NotaController@traerNotaById');
Route::get('/Notas/principal','NotaController@update');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/Notas/principal', 'NotaController@index');
//Route::get('/Notas/principal/{id}','NotaController@update');
Route::resource('/Notas/principal', 'NotaController');