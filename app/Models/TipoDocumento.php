<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
   //administra la información de la tabla de la BD
    protected $fillable=[
                     'nombre',
                     'abreviacion',
                  ];


    public function clientes(){
        return $this->hasMany(Cliente::class,'numero_documento');
    }




}
