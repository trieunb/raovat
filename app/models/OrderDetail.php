<?php

class OrderDetail extends \Eloquent {
	protected $fillable = ['order_id', 'product_id', 'qty', 'price'];
	protected $table = 'order_details';
	public function order()
	{
		return $this->belongsTo('Order', 'order_id');
	}
}