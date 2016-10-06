<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin', 'FrontController@admin');

Route::get('/home', 'HomeController@index');
//para pasar a pdf
Route::get('pdf/{id}', 'PDFController@invoice');
Route::get('pdfd/{id}', 'PDFController@descargar');

Route::resource('usuario', 'UsuarioController');
Route::resource('cuestionario', 'CuestionarioController');
