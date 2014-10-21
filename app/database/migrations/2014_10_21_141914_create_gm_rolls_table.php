<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGmRollsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gm_rolls', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descript');
			$table->integer('gm_menu_id');
			$table->integer('gm_tareas_id');
			$table->integer('gm_quizsesid');
			$table->integer('gm_grupos_id');
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
		Schema::drop('gm_rolls');
	}

}
