<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Parametros;

class ParametrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Parametros::all();
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
        return Parametros::insertGetId([
        	'comite_id' => $request->comite_id,
        	'valor_metro' => $request->valor_metro,
        	'valor_maximo_descuento' => $request->valor_maximo_descuento,
        	'valor_sobre_consumo' => $request->valor_sobre_consumo,
        	'metros_sobre_consumo' => $request->metros_sobre_consumo,
        	'cargo_fijo' => $request->cargo_fijo,
        	'alcantarillado' => $request->alcantarillado,
        	'multa_reunion' => $request->multa_reunion,
        	'multa_corte' => $request->multa_corte,
        	'multa_adulteracion' => $request->multa_adulteracion
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
        return Parametros::find($id);
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
        $mes = Parametros::find($id);
        $mes->update($request->all());
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
        Parametros::destroy($id);
        return['deleted' => true];
    }
}
