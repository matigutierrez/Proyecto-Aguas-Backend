<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ViviendaCliente;

class ViviendaClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return ViviendaCliente::all();

        $viviendaCliente = ViviendaCliente::all();
        foreach ($viviendaCliente as $vivienda) {
            foreach ($vivienda->cliente as $cliente) {
                # code...
            }
            foreach ($vivienda->vivienda as $vivienda) {
                # code...
            }
        }
        return $viviendaCliente;
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
        ViviendaCliente::create($request->all());
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
        //return ViviendaCliente::find($id);

        $viviendaCli = ViviendaCliente::find($id);
        foreach ($viviendaCli->cliente as $cliente) {
            # code...
        }
        foreach ($viviendaCli->vivienda as $vivienda) {
            # code...
        }
        return $viviendaCli;
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
        $viviendacliente = ViviendaCliente::find($id);
        $viviendacliente->update($request->all());
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
        ViviendaCliente::destroy($id);
        return['deleted' => true];
    }
}
