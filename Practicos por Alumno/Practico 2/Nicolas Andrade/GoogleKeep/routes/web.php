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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notas/{id}', 'NotasController@destroy');
Route::post('/notas/', 'NotasController@store');
Route::get('/notas/', 'NotasController@index');
Route::get('/notas/edit/{id}', 'NotasController@edit');