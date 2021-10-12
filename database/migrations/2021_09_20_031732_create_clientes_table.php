<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//creando la tabla
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('numero_documento');
            $table->unsignedBigInteger('idtipos_documentos'); //para crear llave foranea
            $table->foreign('idtipos_documentos')->references('id')->on('tipo_documentos');//Hacemos referencia a la tabla donde esta esa llave foranea
                                                                                            //como la creamos en la migración
                                                                                            //que columna va a ser la llave foranea
                                                                                            //hace referencia al nombre de llave primaria de la otra tabla y ahora le decimos el nombre de la tabla que hace referencia
            $table->string('nombres');
            $table->string('apellidos');
            $table->primary(['numero_documento','idtipos_documentos']);//llave primaria compuesta


           /*  $table->integer('fabricantes_id')->unsigned();
            $table->foreign('fabricantes_id')->references('id')->on('fabricantes')->onDelete('cascade')->onUpdate('cascade'); */


            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
