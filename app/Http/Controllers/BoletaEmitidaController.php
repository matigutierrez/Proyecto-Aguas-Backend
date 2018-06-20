<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BoletaEmitida;
use App\Usuario;
use PDF;

class BoletaEmitidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BoletaEmitida::with('medidor')->get();
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
        BoletaEmitida::create($request->all());
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
        return BoletaEmitida::with('medidor')->where('id', $id)->first();
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
        $boletaemitida = BoletaEmitida::find($id);
        $boletaemitida->update($request->all());
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
        BoletaEmitida::destroy($id);
        return['deleted' => true];
    }

    public function pdf($id, $token)
    {
        $nombre = decrypt(gzinflate(hex2bin($token)));
        $usuario = Usuario::where('nombre_usu', $nombre)->get()->first();
        
        if (isset($usuario)) {
            if ($usuario->rol == 'Administrador') {
                $boleta = BoletaEmitida::find($id);
        
                //$view = \View::make('boleta',['boleta' => $boleta]);
                $view = view('boleta',['boleta' => $boleta]);
                $HTML = $view->render();
                PDF::SetPrintHeader(false);
                PDF::SetMargins(3, 0, 3, true);
                PDF::setJPEGQuality(100);
                PDF::setTextShadow(['enabled' => false]);
                PDF::AddPage('P', [75, 120]);
                PDF::SetTitle("Boleta Electrónica");
                PDF::writeHTML($HTML, true, false, true, false, '');

                PDF::Output('boleta.pdf', 'I');
            }
        }
    }
}
