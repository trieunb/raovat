<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTintuyendungTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tintuyendung', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tencty');
			$table->string('diachi');
			$table->string('linhvuc');
			$table->string('vitrituyendung');
			$table->string('noilamviec');
			$table->string('mucluong');
			$table->string('hannophoso');
			$table->string('logo');
			$table->longText('noidungchitiet');
			$table->string('nguoidangtin');
			$table->string('chucvu');
			$table->string('sodienthoai');
			$table->string('email');
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
		Schema::drop('tintuyendung');
	}

}
