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
    return view('/nota');
});

Auth::routes();

Route::resource('nota/','NotaController');
Route::get('/nota/index','NotaController@index');
Route::get('/nota/','NotaController@create');
Route::post('/nota/','NotaController@store');
Route::delete('/nota/{id}','NotaController@destroy');
/*
Route::delete('user/{id}', function ($id) {
    $user = App\User::find($id)->delete();
    return Redirect::back();
});*/
Route::put('/nota/edit/{id}','NotaController@edit');

Route::get('/home', 'HomeController@index')->name('home');
