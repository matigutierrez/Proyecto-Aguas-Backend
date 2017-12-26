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
        //return Medidor::all();

        $medidores = Medidor::all();
        foreach ($medidores as $medidor) {
            foreach ($medidor->estadoMedidor as $estadoMedidor) {
                # code...
            }
            foreach ($medidor->vivienda as $vivienda) {
                # code...
            }
        }
        return $medidores;
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
        Medidor::create($request->all());
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
        //return Medidor::find($id);

        $medidor = Medidor::find($id);
        foreach ($medidor->estadoMedidor as $estadoMedidor) {
            # code...
        }
        foreach ($medidor->vivienda as $vivienda) {
            # code...
        }
        return $medidor;
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
}
