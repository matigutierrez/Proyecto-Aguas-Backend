<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AbonoBoleta;
use DB;

class AbonoBoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AbonoBoleta::with('boletaEmitida')->get();
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
        AbonoBoleta::create($request->all());
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
        return AbonoBoleta::with('boletaEmitida')->where('id', $id)->first();
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
        $abonoboleta = AbonoBoleta::find($id);
        $abonoboleta->update($request->all());
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
        AbonoBoleta::destroy($id);
        return['deleted' => true];
    }

    public function boletaEmitida($id){
        return AbonoBoleta::join('boleta_emitida', 'abono_boleta.boleta_emitida_id', '=', 'boleta_emitida.id')
            ->select(DB::raw('abono_boleta.id as id_abono, abono_boleta.monto_abonado as monto_abono, boleta_emitida.id as id_boleta, boleta_emitida.medidor_id as id_medidor, boleta_emitida.nombre_cliente as nombre_cliente'))
            ->where('abono_boleta.boleta_emitida_id', $id)
            ->get();
    }
}
