<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['middleware' => ['jwt.auth']], function () {
	Route::apiResource('cliente', 'ClienteController');

	Route::apiResource('usuario', 'UsuarioController');

	Route::apiResource('rol', 'RolController');

	Route::apiResource('region', 'RegionController');

	Route::apiResource('comuna', 'ComunaController');

	Route::apiResource('estado', 'EstadoController');

	Route::apiResource('subsidio', 'SubsidioController');

	Route::apiResource('vivienda', 'ViviendaController');

	Route::post('busqueda','ClienteController@busqueda');
});

Route::post('login', 'AuthController@authenticate');