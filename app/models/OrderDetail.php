<?php

class OrderDetail extends \Eloquent {
	protected $fillable = ['order_id', 'product_id', 'qty', 'price'];
	protected $table = 'order_details';
	public function order()
	{
		return $this->belongsTo('Order', 'order_id');
	}
	public function product()
	{
		return $this->belongsTo('Product', 'product_id');
	}
	public function price()
	{
		return number_format($this->price, 0, ',', '.');
	}
	public function total()
	{
		return number_format($this->qty*$this->price, 0, ',', '.');
	}
}