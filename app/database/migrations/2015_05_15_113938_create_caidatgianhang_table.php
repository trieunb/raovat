<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaidatgianhangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caidatgianhang', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gianhang_id');
			$table->string('tencaidat');
			$table->integer('giatri');
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
		Schema::drop('caidatgianhang');
	}

}
