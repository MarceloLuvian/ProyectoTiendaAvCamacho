<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateproductosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tipoproducto')->radio('interno', 'externo');
			$table->string('CLAVE');
			$table->string('Fechaingreso');
			$table->integer('cantidad');
			$table->string('descripcion');
			$table->float('costocompra');
			$table->float('costoventa');
			$table->string('imagen');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos');
	}

}
