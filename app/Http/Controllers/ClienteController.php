<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\TipoDocumento;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $tiposDocumentos = TipoDocumento::all();
        return view('cliente.index')->with(['tiposDocumentos'=>$tiposDocumentos]); */

        //para ver las relaciones
        /* $prueba=Cliente::query()->with('tipo_documento')->get();
        dd($prueba); */


        /**
         * all() => Select * from clientes;
         * with(relation|relations) => select c.*, td.* from clientes c inner join tipos_documentos td on c.idtipos_documentos = td.id;
         */
        $clientes = Cliente::with('tipoDocumento')->get();

        return view('cliente.index')->with(['clientes'=>$clientes]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //envia una vista
    {
        /**
         * -> Sirve para llamar una propiedad o un método de un objeto
         * :: Llama una propiedad o un método estatico de una clase (Los métodos o propiedades estaticas no necesitan instancear un objeto, se pueden llamar directamente)
         */

        $tiposDocumentos = TipoDocumento::all();
        return view('cliente.agregar')->with(['tiposDocumentos'=>$tiposDocumentos]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            //guardar cliente
        $agregar=new Cliente();
        $agregar->numero_documento=request('numero_documento');
        $agregar->idtipos_documentos=request('tipo_documento');
        $agregar->nombres=request('nombres');
        $agregar->apellidos=request('apellidos');
        $agregar->save();
        }catch(QueryException $queryException){
            return response()->json(['msg'=>$queryException->getMessage(),'success'=>false]);
        }
            return response()->json(['msg'=>'Se ha guardado el Cliente','success'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($numero_documento,$idtipos_documentos)
    {
        try{
        //singular
            $cliente = Cliente::where('numero_documento','=',$numero_documento)->where('idtipos_documentos','=',$idtipos_documentos)->first();
            $tiposDocumentos = TipoDocumento::all(); //tener todos los tipos de documento para podder cambiarlos
        }catch(QueryException $queryException){
            return abort(500, 'Ha sucedido un error');
        }
        return view('cliente.editar')->with(['cliente'=>$cliente,'tiposDocumentos'=>$tiposDocumentos]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $numero_documento, $idtipos_documentos)
    {
        try{
            $cliente = Cliente::query()->where('numero_documento','=',$numero_documento)
                                       ->where('idtipos_documentos','=',$idtipos_documentos)->first();

            $cliente->nombres=$request->nombres;//request('nombres')
            $cliente->apellidos=$request->get('apellidos');
            $cliente->numero_documento=$request->numero_documento ;
            $cliente->idtipos_documentos=$request->tipo_documento;
            $cliente->update();
        }catch(QueryException $queryException){
           return response()->json(['msg'=>$queryException->getMessage(),'success'=>false]);
        }
           return response()->json(['msg'=>'Exitoso','success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($numero_documento,$idtipos_documentos)
    {
        $eliminar_cliente= Cliente::where('numero_documento','=',$numero_documento)
                                   ->where('idtipos_documentos','=',$idtipos_documentos);
        $eliminar_cliente->delete();
        //redireccionar index  recargue sin javascript
        //$clientes = Cliente::all();
        //  view('cliente.index')->with(['clientes'=>$clientes]);
        return response()->json(['msg'=>'Se Ha Eliminado Correctamente el Cliente','success'=>true]);

    }
}
