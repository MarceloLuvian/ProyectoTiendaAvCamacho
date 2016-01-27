<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');



Route::get('registros','RegistrosController@vistaRegistros');

Route::get('venta','ventasController@lista');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('pedidos','pedidosController');

Route::get('pdf', 'PdfController@invoice');

Route::resource('productos', 'productosController');

Route::resource('ventas','ventasController');

Route::post('crear', 'productosController@guardar');


Route::get('prod/{id}',['as' => 'prod', 'uses' => 'ventasController@consulta']);



Route::get('productos/{id}/delete', [
    'as' => 'productos.delete',
    'uses' => 'productosController@destroy',
]);
