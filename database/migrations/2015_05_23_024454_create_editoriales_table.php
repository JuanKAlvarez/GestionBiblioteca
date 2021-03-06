<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditorialesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('editoriales', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->string('nombre');
			$table->string('ciudad');
			$table->string('telefono');
			$table->string('direccion');
			$table->string('sede');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('editoriales');
	}

}
