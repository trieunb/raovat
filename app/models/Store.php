<?php

class Store extends \Eloquent {
	protected $fillable = ['store_slug', 'user_id', 'tengianhang'];
	protected $table = 'gianhang';
	public function store_url($params = '')
	{
		return URL::to('gian-hang/'.$this->store_slug . '/' . $params);
	}
	public function image($image = '', $options = array())
	{
		return HTML::image('uploads/' . $this->store_slug . '/' . $image, null, $options);
	}
	public function image_url($image = '')
	{
		return URL::to('uploads/'.$this->store_slug . '/' . $image);
	}
	public function option()
	{
		return $this->hasMany('StoreOption', 'store_id');
	}
	public function key($k = false)
	{
		$options = $this->option;
		foreach ($options as $key => $value) {
			if($k == $value->option_key)
			{
				return $value->option_value;
			}
		}
		return "";
	}
	public function price($number = 0)
	{
		return number_format($number, 0, ',', '.');
	}

}