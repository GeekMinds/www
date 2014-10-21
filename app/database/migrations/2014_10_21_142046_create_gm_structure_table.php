<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGmStructureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gm_structure', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gm_menu_id');
			$table->string('gm_pages_parent');
			$table->string('gm_pages_child');
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
		Schema::drop('gm_structure');
	}

}
