<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoreProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('store_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('store_id');
			$table->integer('cat_id');
			$table->string('title');
			$table->integer('vote');
			$table->integer('price');
			$table->text('description');
			$table->string('image');
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
		Schema::drop('store_products');
	}

}
