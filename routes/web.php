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

Route::get('/maestros/create', 'MaestroController@create')->name('maestro.create');

Route::post('/maestros/store', 'MaestroController@store')->name('maestro.store');

//Rutas de Colegios

Route::get('/colegios', 'ColegioController@index')->name('colegio.index');

Route::get('/colegios/create', 'ColegioController@create')->name('colegio.create');

Route::get('/colegios/{id}', 'ColegioController@show')->where('id','[0-9]+')->name('colegio.show');

Route::post('/colegios/store', 'ColegioController@store')->name('colegio.store');

Route::get('/colegios/{colegio}/editar', 'ColegioController@edit')->name('colegio.edit');

Route::put('/colegios/{colegio}', 'ColegioController@update')->name('colegio.update');

Route::delete('/colegios/{colegio}', 'ColegioController@destroy')->name('colegio.destroy');
