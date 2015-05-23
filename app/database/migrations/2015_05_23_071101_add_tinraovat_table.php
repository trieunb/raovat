<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTinraovatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tinraovat', function(Blueprint $table)
		{
			$table->dateTime('ngaydang')->after('vip_to');
			$table->integer('luotxem')->after('ngaydang');
			$table->integer('trangthai')->after('luotxem');
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
