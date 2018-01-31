<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Medidor;

class MedidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Medidor::with(['estadoMedidor', 'vivienda', 'comite'])->get();
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

            $idmedidor = Medidor::insertGetId([
              'num_medidor' => $request->num_medidor,
              'marca_medidor' => $request->marca_medidor,
              'lectura_inicial' => $request->lectura_inicial,
              'vivienda_id' => $request->vivienda_id,
              'estado_medidor_id' => $request->estado_medidor_id,
              'comite_id' => $request->comite_id
            ]);

            return \Response::json($idmedidor, 200);

        } catch (Exception $e) {

            \Log::info('Error al crear el Medidor' .$e);
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
        return Medidor::with(['estadoMedidor', 'vivienda', 'comite'])->where('id', $id)->first();
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
        $medidor = Medidor::find($id);
        $medidor->update($request->all());
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
        Medidor::destroy($id);
        return['deleted' => true];
    }

    /**
     * Obtener la vivienda de un medidor
     *
     * @param  int  $id
     */
    public function vivienda($id) {
        return Medidor::find($id)->vivienda;
    }
}
