<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddDanhmucTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('danhmuc', function(Blueprint $table)
		{
			$table->integer('parent')->after('tendanhmuc');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('danhmuc', function(Blueprint $table)
		{
			
		});
	}

}
