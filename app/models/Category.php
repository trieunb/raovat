<?php

class Category extends \Eloquent {
	protected $fillable = ['id', 'tendanhmuc', 'parent'];
	protected $table = 'danhmuc';

}