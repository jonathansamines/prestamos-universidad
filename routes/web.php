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

Route::group([ 'prefix' => 'prestamos', 'as' => 'prestamos.'], function() {
    Route::get('/', [
        'uses' => 'PrestamoController@index',
        'as' => 'index'
    ]);

    Route::get('/crear', [
        'uses' => 'PrestamoController@crear',
        'as' => 'crear'
    ]);

    Route::get('/eliminar/{id}', [
        'uses' => 'PrestamoController@eliminar',
        'as' => 'eliminar'
    ]);

    Route::get('/editar/{id}', [
        'uses' => 'PrestamoController@editar',
        'as' => 'editar'
    ]);
});

Route::group([ 'prefix' => 'cañoneras', 'as' => 'cañoneras.'], function() {
    Route::get('/', [
        'uses' => 'CañoneraController@index',
        'as' => 'index'
    ]);

    Route::get('/crear', [
        'uses' => 'CañoneraController@crear',
        'as' => 'crear'
    ]);

    Route::post('/crear', [
        'uses' => 'CañoneraController@crearCañonera',
        'as' => 'action.crear'
    ]);

    Route::get('/{id}/eliminar', [
        'uses' => 'CañoneraController@eliminar',
        'as' => 'eliminar'
    ]);

    Route::get('/{id}/editar', [
        'uses' => 'CañoneraController@editar',
        'as' => 'editar'
    ]);

    Route::post('/{id}/editar', [
        'uses' => 'CañoneraController@editarCañonera',
        'as' => 'action.editar'
    ]);
});

Route::group([ 'prefix' => 'personas', 'as' => 'personas.'], function() {
    Route::get('/', [
        'uses' => 'PersonaController@index',
        'as' => 'index'
    ]);

    Route::get('/crear', [
        'uses' => 'PersonaController@nuevo',
        'as' => 'crear'
    ]);

    Route::get('/{id}/eliminar', [
        'uses' => 'PersonaController@eliminar',
        'as' => 'eliminar'
    ]);

    Route::get('/{id}/editar', [
        'uses' => 'PersonaController@editar',
        'as' => 'editar'
    ]);
});

Route::group([ 'prefix' => 'facultades', 'as' => 'facultades.'], function() {
    Route::get('/', [
        'uses' => 'FacultadController@index',
        'as' => 'index'
    ]);

    Route::get('/crear', [
        'uses' => 'FacultadController@nuevo',
        'as' => 'crear'
    ]);

    Route::get('/{id}/eliminar', [
        'uses' => 'FacultadController@eliminar',
        'as' => 'eliminar'
    ]);

    Route::get('/{id}/editar', [
        'uses' => 'FacultadController@editar',
        'as' => 'editar'
    ]);
});