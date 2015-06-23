<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTintuyendung1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tintuyendung', function(Blueprint $table)
		{
			$table->dateTime('vip_to')->after('trangthai');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tintuyendung1', function(Blueprint $table)
		{
			
		});
	}

}
