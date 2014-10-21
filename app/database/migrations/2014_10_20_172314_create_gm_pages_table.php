<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGmPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gm_pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('title');
			$table->string('descript');
			$table->string('slug');
			$table->string('guid');
			$table->integer('gm_pages_id');
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
		Schema::drop('gm_pages');
	}

}
