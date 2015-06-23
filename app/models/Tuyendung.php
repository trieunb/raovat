<?php

class Tuyendung extends \Eloquent {
	protected $fillable = ['id', 'user_id', 'tencty','diachi','linhvuc','vitrituyendung','noilamviec','mucluong','hannophoso','logo','noidungchitiet','nguoidangtin','email','sodienthoai','chucvu'];
	protected $table = 'tintuyendung';
	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}
}