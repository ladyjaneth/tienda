<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema = clase maestra que nos va a ejecuta todo lo que coloquemos aqui
        Schema::table('productos',function($table){
            $table->string('imagen');
            $table->string('descripcion');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos',function($table){
            $table->dropColumn('imagen');
            $table->dropColumn('descripcion');
        });
    }
}
