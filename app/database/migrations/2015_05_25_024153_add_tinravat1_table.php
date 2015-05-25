<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTinravat1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tinraovat', function(Blueprint $table)
		{
			$table->string('name');
			$table->string('email');
			$table->string('phone');
			$table->string('address');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tinraovat', function(Blueprint $table)
		{
			
		});
	}

}
