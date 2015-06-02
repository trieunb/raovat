<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('store_id');
			$table->string('billing_first');
			$table->string('billing_last');
			$table->string('billing_company');
			$table->string('billing_address');
			$table->string('billing_email');
			$table->string('billing_phone');
			$table->string('shipping_first');
			$table->string('shipping_last');
			$table->string('shipping_company');
			$table->string('shipping_address');
			$table->string('shipping_note');
			$table->dateTime('order_date');
			$table->integer('order_status');
			$table->integer('order_total');
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
		Schema::drop('orders');
	}

}
