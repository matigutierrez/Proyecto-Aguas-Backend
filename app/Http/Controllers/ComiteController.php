<?php

namespace App\Http\Controllers;

use App\Comite;
use App\Usuario;
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
        //return Comite::all();
    	$usuario = Usuario::where('id', $auth->getAuthenticatedUser()->id)->first();

    	// if ( $usuario->superadmin ) {
        return Comite::with('comuna')->get();
        // }
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
        return Comite::find($id)->medidores->pluck('vivienda.clientes')->collapse()->unique();
    }
}
