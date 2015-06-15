<?php

class Order extends \Eloquent {
	protected $fillable = ['store_id', 'order_number', 'billing_first', 'billing_last', 'billing_company', 'billing_address', 'billing_email', 'billing_phone', 'shipping_first', 'shipping_last', 'shipping_company', 'shipping_address', 'shipping_note', 'order_date', 'order_status', 'order_total'];
	protected $table = 'orders';
	public function detail()
	{
		return $this->hasMany('OrderDetail', 'order_id');
	}
	public function store()
	{
		return $this->belongsTo('Store', 'store_id');
	}
	public function total()
	{
		return number_format($this->order_total, 0, ',', '.');
	}
}