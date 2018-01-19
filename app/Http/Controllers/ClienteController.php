<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

use DB;

use PDF;

use View;

use JWTAuth;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
        $usuario = $auth->getAuthenticatedUser();

        switch ($usuario->rol) {
            case 'Super Administrador':
                return Cliente::all();
            case 'Administrador':
                return $usuario->comite->medidores->pluck('vivienda.clientes');
            default:
                return [$usuario->cliente];
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

            $idCliente = Cliente::insertGetId([
              'rut_cliente' => $request->rut_cliente,
              'nombre' => $request->nombre,
              'apellido_pater' => $request->apellido_pater,
              'apellido_mater' => $request->apellido_mater,
              'telefono' => $request->telefono,
              'email' => $request->email,
              'residencia' => $request->residencia
            ]);

            return \Response::json($idCliente, 200);

        } catch (Exception $e) {

            \Log::info('Error al crear Cliente' .$e);
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

            $cliente = Cliente::where('id', $id)->first();
            return \Response::json($cliente, 200);

        } catch (Exception $e) {

            \Log::info('Error al obtener los datos del Cliente' .$e);
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

            $cliente = Cliente::find($id);
            $cliente->update($request->all());
            return ['update' => true];

        } catch(Exception $e) {

            \Log::info('Error al actualizar Cliente' .$e);
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

            Cliente::destroy($id);
            return['deleted' => true];

        } catch(Exception $e) {

            \Log::info('Error al eliminar Cliente' .$e);
            return \Response::json(['deleted' => false ], 500);

        }
        
    }

    /**
     * Search the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function busqueda() 
    {
        $cliente = DB::table('cliente')->select('nombre', 'email')->get();
        return $cliente;
    }

    /**
     * Generate PDF.
     *
     * @return PDF
     */
    public function generarpdf()
    {
        try {

            $pdf = PDF::loadView('vista');
            return $pdf->download('archivo.pdf');

        }catch(\Exception $e) {

            \Log::info('Error en la descarga del pdf'. $e);
            return \Response::json('Error',500); 

        }
    }

     /**
     * Get Cliente
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function client(AuthController $auth) {

        $cliente = DB::table('cliente')->where('id', $auth->getAuthenticatedUser()->cliente_id)->get();
        return \Response::json($cliente, 200);
    }
}
