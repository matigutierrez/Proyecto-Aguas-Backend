<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vivienda;

use DB;

use JWTAuth;

class ViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
        $rol = DB::table('rol')->select('des_rol')->where('id', $auth->getAuthenticatedUser()->rol_id)->first();

        if ($rol->des_rol == 'admin') {

            return Vivienda::all();

        } else {

            $viviendas = App\Cliente::with('viviendas')->where('cliente_id', $auth->getAuthenticatedUser()->cliente_id)->get();
            
            if(!isset($viviendas)) {

                //arreglar en caso de que sea mas de una vivienda
                $vivienda = Vivienda::where('id', $viviendas->vivienda_id)->first();
                return \Response::json($vivienda, 200);

            } else {

                \Log::info('Error al obtener viviendas' .$e);
                return \Response::json(['created' => false ], 500);
            }
        }
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

            $idVivienda = Vivienda::insert([
              'direccion' => $request->direccion,
              'estado_id' => $request->estado_id,
              'comuna_id' => $request->comuna_id,
              'subsidio_id' => $request->subsidio_id
            ]);

            return \Response::json($idVivienda, 200);

        } catch (Exception $e) {

            \Log::info('Error al crear la Vivienda' .$e);
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
        try {

            $vivienda = Vivienda::where('id', $id)->first();
            return \Response::json($vivienda, 200);

        } catch (Exception $e) {

            \Log::info('Error al obtener los datos de la Vivienda' .$e);
            return \Response::json(['show' => false ], 500);

        }
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
        try{

            $vivienda = Vivienda::find($id);
            $vivienda->update($request->all());
            return ['update' => true];

        } catch(Exception $e) {

            \Log::info('Error al actualizar Vivienda' .$e);
            return \Response::json(['update' => false ], 500);

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{

            Vivienda::destroy($id);
            return['deleted' => true];

        } catch(Exception $e) {

            \Log::info('Error al eliminar la Vivienda' .$e);
            return \Response::json(['deleted' => false ], 500);

        }
        
    }
}
