<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGmUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gm_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('primer_nombre');
			$table->string('segundo_nombre');
			$table->string('primer_apellido');
			$table->string('segundo_apellido');
			$table->string('email');
			$table->string('fb_id');
			$table->date('join_date');
			$table->integer('type_id');
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
		Schema::drop('gm_users');
	}

}
