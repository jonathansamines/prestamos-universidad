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

Route::redirect('/', '/prestamos');

Route::group([ 'prefix' => 'prestamos'], function() {
    Route::get('/', 'PrestamoController@index');
    Route::get('/nuevo', 'PrestamoController@nuevo');
    Route::get('/eliminar/{id}', 'PrestamoController@eliminar');
    Route::get('/editar/{id}', 'PrestamoController@editar');
});

Route::group([ 'prefix' => 'cañoneras'], function() {
    Route::get('/', 'CañoneraController@index');
    Route::get('/nuevo', 'CañoneraController@nuevo');
    Route::get('/eliminar/{id}', 'CañoneraController@eliminar');
    Route::get('/editar/{id}', 'CañoneraController@editar');
});

Route::group([ 'prefix' => 'personas'], function() {
    Route::get('/', 'PersonaController@index');
    Route::get('/nuevo', 'PersonaController@nuevo');
    Route::get('/eliminar/{id}', 'PersonaController@eliminar');
    Route::get('/editar/{id}', 'PersonaController@editar');
});

Route::group([ 'prefix' => 'facultades'], function() {
    Route::get('/', 'FacultadController@index');
    Route::get('/nuevo', 'FacultadController@nuevo');
    Route::get('/eliminar/{id}', 'FacultadController@eliminar');
    Route::get('/editar/{id}', 'FacultadController@editar');
});