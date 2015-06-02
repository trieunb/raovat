<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoreOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('store_options', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('store_id');
			$table->string('option_key');
			$table->string('option_des');
			$table->string('option_value');
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
		Schema::drop('store_options');
	}

}
