<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //pregunta a la base de datos si la tabla pasada en el parámetro existe
        //devuelve un valor booleano verdadero si existe, falso si no existe
        if(Schema::hasTable('factura')){
            //creamos la tabla
            Schema::create('factura', function (Blueprint $table) {
                $table->unsignedBigInteger('idproductos'); //para crear llave foranea
                $table->unsignedBigInteger('numero_documento');
                $table->unsignedBigInteger('idtipos_documentos');

                $table->foreign('idproductos')->references('id')->on('productos');
                $table->foreign(['numero_documento','idtipos_documentos'])->references(['numero_documento','idtipos_documentos'])->on('clientes');
                $table->date('fecha_compra');
                $table->double('total_producto');
                $table->integer('cantidad');
                //$table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
