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
    //return view('nota/index');
    return redirect('/nota/');

});

Route::post('/nota/', 'NotaController@store');
Route::get('/nota/edit/{id}', 'NotaController@edit');
Route::get('/nota/', 'NotaController@index');
Route::get('/nota/{id}', 'NotaController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


