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

Route::prefix('/')->group(function () {

	Auth::routes();
	Route::get('/', function () { return view('auth.login'); });
	
});

Route::prefix('/')->middleware('auth')->group(function () {
	Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/personal',  'PersonalController');
    Route::resource('/proveedores', 'ProveedoresController');
    Route::resource('/productos', 'ProductosController');
    Route::resource('/usuarios', 'UsuariosController');
    Route::resource('/ordenes-de-compra', 'OrdenesController');
    Route::resource('/clientes', 'ClientesController');
});

