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
        //return RegistroMensual::all();

        $registroMensual = RegistroMensual::all();
        foreach ($registroMensual as $mensual) {
            foreach ($mensual->vivienda as $vivienda) {
                # code...
            }
            foreach ($mensual->mes as $mes) {
                # code...
            }
        }
        return $registroMensual;
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
        RegistroMensual::create($request->all());
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
        return RegistroMensual::find($id);

        $registroMens = AbonoBoleta::find($id);
        foreach ($registroMens->vivienda as $vivienda) {
            # code...
        }
        foreach ($registroMens->mes as $mes) {
            # code...
        }
        return $registroMens;
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
