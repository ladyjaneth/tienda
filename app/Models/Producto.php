<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{  //administra inf de la tabla de la base de datos
     //tipo string- //tipo array//permitir qque se llenen estos campos
      protected $primaryKey='id';

    protected $fillable=[
       'nombre',
       'cantidad',
       'precio',
       'imagen',
       'descripcion'
    ];
    public $timestamps = false;

    /*updated_at and created_at, no existen en la tabla se define como falsa la
    *la propiedad timestamps
    */

    public function clientes(){
        return $this->belongsTo(Cliente::class,'numero_documento');
    }



}
