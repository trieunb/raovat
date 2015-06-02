<?php

class StoreOption extends \Eloquent {
	protected $fillable = [];
	protected $table = 'store_options';
	public function store()
	{
		return $this->belongsTo('Store', 'store_id');
	}
	public function getKey($key = null)
	{
		foreach ($this as $key => $value) {
			if($$this->key = $value->option_key)
			{
				return $value->option_value;
			}
		}
	}
}