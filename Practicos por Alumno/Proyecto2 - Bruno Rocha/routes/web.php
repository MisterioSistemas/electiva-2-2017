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






Route::get('/', 'NotaController@index');

Route::resource('nota', 'NotaController');

Route::get('/prueba', 'NotaController@index');

Route::get('/notabuscar', 'NotaController@buscar');

