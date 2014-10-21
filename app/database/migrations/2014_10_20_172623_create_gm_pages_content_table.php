<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGmPagesContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gm_pages_content', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('header');
			$table->string('slider');
			$table->string('left_sidebar');
			$table->string('right_sidebar');
			$table->string('content_top');
			$table->string('content_middle');
			$table->string('content_bottom');
			$table->string('footer');
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
		Schema::drop('gm_pages_content');
	}

}
