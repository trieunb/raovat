<?php

class StoreCategory extends \Eloquent {
	protected $fillable = ['store_id', 'name'];
	protected $table = 'store_categories';
	public function store()
	{
		return $this->belongsTo('Store');
	}
}