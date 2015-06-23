<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTintuyendungTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tintuyendung', function(Blueprint $table)
		{
			$table->integer('user_id')->after('noidungchitiet');
			$table->integer('trangthai')->after('noidungchitiet');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tintuyendung', function(Blueprint $table)
		{
			
		});
	}

}
