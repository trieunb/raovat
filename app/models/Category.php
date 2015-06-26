<?php

class Category extends \Eloquent {
	protected $fillable = ['id', 'tendanhmuc', 'parent'];
	protected $table = 'danhmuc';

	 public function children()
    {
        return $this->hasMany('Category','parent');   
    }

}