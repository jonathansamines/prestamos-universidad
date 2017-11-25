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
    return view('prestamos/index');
});

Route::get('cañoneras', function () {
    return view('cañoneras/index');
});

Route::get('personas', function () {
    return view('personas/index');
});

Route::get('facultades', function () {
    return view('facultades/index');
});
