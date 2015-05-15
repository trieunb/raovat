<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTinraovatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tinraovat', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('cat_id');
			$table->tinyInteger('loaitin');
			$table->string('tieude');
			$table->text('noidung');
			$table->integer('gia');
			$table->string('image');
			$table->text('quytrinhvanchuyen');
			$table->dateTime('vip_to');
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
		Schema::drop('tinraovat');
	}

}
