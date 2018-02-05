<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RegistroMensual;

class RegistroMensualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RegistroMensual::with(['vivienda', 'medidor', 'mes'])->get();
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
        try {

            $idregistroM = RegistroMensual::insertGetId([
              'year' => $request->year,
              'lectura' => $request->lectura,
              'saldo_pagado' => $request->saldo_pagado,
              'consumo' => $request->consumo,
              'valor_pagar' => $request->valor_pagar,
              'lectura_anterior' => $lectura->lectura_anterior,
              'cargo_fijo' => $request->cargo_fijo,
              'alcantarillado' => $request->alcantarillado,
              'vivienda_id' => $request->vivienda_id,
              'medidor_id' => $request->medidor_id,
              'mes_id' => $request->mes_id
            ]);

            return \Response::json($idregistroM, 200);

        } catch (Exception $e) {

            \Log::info('Error al crear el Registro' .$e);
            return \Response::json(['created' => false ], 500);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return RegistroMensual::with(['vivienda_id', 'medidor', 'mes'])->where('id', $id)->first();
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
        $registromensual = RegistroMensual::find($id);
        $registromensual->update($request->all());
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
        RegistroMensual::destroy($id);
        return['deleted' => true];
    }
}
