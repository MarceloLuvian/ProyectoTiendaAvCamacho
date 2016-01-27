<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carritopedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritopedido', function (Blueprint $table) {           
            $table->string('id_producto');
            $table->string('CLAVE');
            $table->string('descripcion')->nulleable;
            $table->string('costoventa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('carritopedido');
    }
}
