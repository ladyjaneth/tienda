<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{ //creando la tabla

    /* esto NO eloquent nolo reconoce por que es una llave compuesta= protected $primaryKey="numero_documento";
    protected $foreign="idtipos_documentos"; */
    protected $primaryKey="numero_documento";

    protected $fillable=[
        'idtipos_documentos',
        'nombres',
        'apellidos',
    ];

    public $timestamps=false;

    public function productos() //las relaciones (funciones) llamar la información de a otra tabla
    {
        return $this->belongsToMany(Producto::class, 'factura','numero_documento','idproductos')->withPivot('fecha_compra','total_producto','cantidad');
    }

    public function tipoDocumento()
    {
         return $this->belongsTo(TipoDocumento::class,'idtipos_documentos');
    }
}
