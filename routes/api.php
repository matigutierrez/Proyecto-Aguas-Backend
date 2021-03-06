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

	Route::get('cliente/{id}/viviendas', 'ClienteController@viviendas');

	Route::get('cliente/{id}/addvivienda/{idviv}', 'ClienteController@addVivienda');

	Route::get('cliente/{id}/removevivienda/{idviv}', 'ClienteController@removeVivienda');

	Route::get('cliente/{id}/medidores', 'ClienteController@medidores');

	Route::apiResource('usuario', 'UsuarioController');
	
	Route::get('usuario/actual', 'UsuarioController@usuarioActual');

	Route::apiResource('rol', 'RolController');

	Route::apiResource('region', 'RegionController');

	Route::apiResource('comite', 'ComiteController');

	Route::get('comite/{id}/clientes', 'ComiteController@clientes');

	Route::get('comite/{id}/addcliente/{idcliente}', 'ComiteController@addCliente');

	Route::get('comite/{id}/removecliente/{idcliente}', 'ComiteController@removeCliente');

	Route::get('comite/{id}/parametros', 'ComiteController@parametros');

	Route::get('comite/{id}/viviendas', 'ComiteController@viviendas');

	Route::get('comite/{id}/medidores', 'ComiteController@medidores');

	Route::get('comite/{id}/viviendacliente', 'ComiteController@viviendaCliente');

	Route::apiResource('comuna', 'ComunaController');

	Route::apiResource('estado', 'EstadoController');

	Route::apiResource('subsidio', 'SubsidioController');

	Route::apiResource('vivienda', 'ViviendaController');

	Route::apiResource('viviendacliente', 'ViviendaClienteController');

	Route::post('busqueda', 'ClienteController@busqueda');

	Route::apiResource('registromensual', 'RegistroMensualController');

	Route::apiResource('mes', 'MesController');

	Route::apiResource('parametros', 'ParametrosController');

	Route::apiResource('boletaemitida', 'BoletaEmitidaController');

	Route::apiResource('abonoboleta', 'AbonoBoletaController');

	Route::get('abonoboleta/{id}/boletaemitida', 'AbonoBoletaController@boletaEmitida');

	Route::post('obtenerIdRegion', 'RegionController@obtenerId');

	Route::post('obtenerIdComuna', 'ComunaController@obtenerId');

	Route::post('obtenerIdCliente', 'ClienteController@obtenerId');

	Route::get('obtenerCliente', 'ClienteController@client');

	Route::apiResource('medidor', 'MedidorController');

	Route::get('medidor/{id}/vivienda', 'MedidorController@vivienda');

	Route::get('medidor/{id}/registrosmensuales', 'MedidorController@registrosMensuales');

	Route::get('medidor/{id}/ultimoregistro', 'MedidorController@ultimoRegistro');
	
	Route::get('medidor/{id}/clientemedidor', 'MedidorController@clienteMedidor');

	Route::apiResource('estadomedidor', 'EstadoMedidorController');

	Route::get('logusuario', 'AuthController@getAuthenticatedUser');

	Route::get('urltoken', 'AuthController@getURLToken');
});

Route::post('login', 'AuthController@authenticate');

Route::get('boletaemitida/{id}/{token}/pdf', 'BoletaEmitidaController@pdf');

