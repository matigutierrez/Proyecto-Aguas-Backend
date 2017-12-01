<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

use DB;

use PDF;

use View;

use JWTAuth;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::all();
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
        Cliente::create($request->all());
        return ['created' => true];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::find($id);
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
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
        return ['update' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return['deleted' => true];
    }

    public function busqueda() 
    {
        $cliente = DB::table('cliente')->select('nombre', 'email')->get();
        return $cliente;
    }

    public function generarpdf()
    {
        try {

            $pdf = PDF::loadView('vista');
            return $pdf->download('archivo.pdf');

        }catch(\Exception $e) {

            \Log::info('Error en la descarga del pdf'. $e);
            return \Response::json('Error',500); 

        }
    }

    public function obtenerId(Request $request)
    {
        try {

            $idcliente = Cliente::with('id')->where('nombre', $request['nombre'])->first();
            return \Response::json($idcliente, 200);

        }catch(\Exception $e) {

            \Log::info('Error no se encontro la Region'. $e);
            return \Response::json('Error'.$e ,500); 

        }
    }

    public function client(AuthController $auth) {

        $cliente = DB::table('cliente')->where('id', $auth->getAuthenticatedUser()->cliente_id)->get();
        return \Response::json($cliente, 200);
    }
    
}
