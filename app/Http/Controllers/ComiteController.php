<?php

namespace App\Http\Controllers;

use App\Comite;
use App\Usuario;
use App\Medidor;
use Illuminate\Http\Request;
use JWTAuth;

class ComiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
    	$usuario = Usuario::where('id', $auth->getAuthenticatedUser()->id)->first();

    	if ( $usuario->superadmin ) {
            return Comite::with('comuna')->get();
        }

        return [];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Comite::insertGetId([
            'comuna_id' => $request->comuna_id,
            'nombre' => $request->nombre,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return Comite::find($id);

        return Comite::with('comuna')->where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comite = Comite::find($id);
        $comite->update($request->all());
        return ['updated' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comite::destroy($id);
        return ['deleted' => true];
    }

    public function clientes($id) {
        return Comite::find($id)->clientes;
    }

    public function viviendas($id) {
        return Comite::find($id)->medidores->pluck('vivienda')->unique('id');
    }

    public function medidores($id) {
        return Medidor::where('comite_id', $id)->with('vivienda', 'estadoMedidor', 'comite')->get();
    }

    public function viviendaCliente($id) {
        $viviendas = Comite::find($id)->medidores->pluck('vivienda')->unique('id');
        $clientes = $viviendas->pluck('clientes');
        return $viviendas;
    }

    public function addCliente($id, $idcliente) {
        Comite::find($id)->addCliente($idcliente);
    }

    public function removeCliente($id, $idcliente) {
        Comite::find($id)->removeCliente($idcliente);
    }

}
