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
//Rutas Pagina principal
Route::get('/', function () {
    return view('index');
})->name('index');

//Rutas de Maestros

Route::get('/maestros', 'MaestroController@index')->name('maestro.index');

//Rutas de Colegios

Route::get('/colegios', 'ColegioController@index')->name('colegio.index');

Route::get('/colegios/create', 'ColegioController@create')->name('colegio.create');

Route::get('/colegios/{id}', 'ColegioController@show')->name('colegio.show');

Route::post('/colegios/store', 'ColegioController@store')->name('colegio.store');
