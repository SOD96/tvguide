<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// users table
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('email', 100);
			$table->string('password');
			$table->string('name', 100)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop event
		Schema::drop('users');
	}

}
