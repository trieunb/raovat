<?php

class Product extends \Eloquent {
	protected $fillable = ['store_id', 'cat_id', 'title', 'vote', 'price', 'description', 'image'];
	protected $table = 'store_products';
	public function category()
	{
		return $this->belongsTo('StoreCategory', 'cat_id');
	}
	public function store()
	{
		return $this->belongsTo('Store');
	}
	public function price()
	{
		return number_format($this->price, 0, ',', '.');
	}
}