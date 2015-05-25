<?php

class News extends \Eloquent {
	protected $fillable = ['id', 'user_id', 'cat_id', 'tieude','loaitin', 'noidung', 'ngaydang','gia','image','quytrinhvanchuyen', 'luotxem','name','email','phone','address'];
	protected $table = 'tinraovat';
	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
	public function category()
	{
		return $this->belongsTo('category', 'cat_id');
	}
}