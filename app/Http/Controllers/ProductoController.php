<?php

namespace App\Http\Controllers;
 /////////////////////////////////////////
use Illuminate\Http\Request;
use App\Models\Producto;
use Dotenv\Repository\RepositoryInterface;
use GrahamCampbell\ResultType\Success;
use Illuminate\Database\QueryException;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $producto=Producto::all();
        return view('producto.index')->with(['productos'=>$producto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                   //modelo

        try{
            $url='';
            //hacemos una validación si recibimos una imagen
            if($request->hasFile('imagen')){
                $request->imagen->StoreAs('./public/img');
            }
                $agregar=new Producto();
                //agregar a la BD producto el nombre //llamar al atributo //como se llama el input
                $agregar->nombre=request('nombre'); //nombre del input
                $agregar->cantidad=request('cantidad');
                $agregar->precio=request('precio');
                $agregar->imagen=('');
                $agregar->descripcion=request('descripcion');
                $agregar->save(); //para guardar

        }catch(QueryException $queryException){
            return response()->json(['msg'=>$queryException->getMessage(),'success'=>false]);
        }
            return response()->json(['msg'=>"Se ha guardado el producto",'success'=>true]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
