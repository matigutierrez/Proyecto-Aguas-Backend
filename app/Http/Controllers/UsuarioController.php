<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;

use JWTAuth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
        $usuario = Usuario::where('id', $auth->getAuthenticatedUser()->id)->first();

        if ( $usuario->superadmin ) {

            return Usuario::with(['cliente', 'comite'])->get();
            
        } else if ( $usuario->comite ) {

            return $usuario->comite->medidores->pluck('vivienda.clientes.*.usuarios')->collapse()->collapse()->unique();

        }

        return [$usuario];
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

            $idusuario = Usuario::insertGetId([
              'nombre_usu' => $request->nombre_usu,
              'password' => bcrypt($request->password),
              'cliente_id' => $request->cliente_id,
              'rol_id' => $request->rol_id
            ]);

            return \Response::json($idusuario, 200);

        } catch (Exception $e) {

            \Log::info('Error al crear Usuario' .$e);
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
        return Usuario::with(['cliente', 'comites'])->where('id', $id)->first();
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
        $usuario = Usuario::find($id);
        $usuario->update($request->all());
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
        Usuario::destroy($id);
        return['deleted' => true];
    }

    public function usuarioActual(AuthController $auth) {
        return Usuario::where('id', $auth->getAuthenticatedUser()->id)->first();
    }

}
