<?php 

namespace App\DTT\Forms;
class NewsAddForm extends FormValidator {

	protected $rules = array(
		'tieude'	=>	'required|min:4|max:255',
		'cat_id'	=>	'required',
		'noidung'	=>	'required|min:10|max:5000',
		'image1'		=>	'mimes:jpeg,jpg,png,gif|max:2000|image',
		'image2'		=>	'mimes:jpeg,jpg,png,gif|max:2000|image',
		'image3'		=>	'mimes:jpeg,jpg,png,gif|max:2000|image',
		'image4'		=>	'mimes:jpeg,jpg,png,gif|max:2000|image',
		'image5'		=>	'mimes:jpeg,jpg,png,gif|max:2000|image',
		'image6'		=>	'mimes:jpeg,jpg,png,gif|max:2000|image'
		);
	protected $messages = array(
		'tieude.required'	=>	'Tiêu đề không được trống.',
		'tieude.min'		=>	'Độ dài tiêu đề phải từ 4 tới 255 kí tự.',
		'tieude.max'		=>	'Độ dài tiêu đề phải từ 4 tới 255 kí tự.',
		'cat_id.require'	=>	'Bạn phải chọn danh mục.',
		'noidung.required'  =>	'Bạn phải nhập nội dung rao vặt.',
		'noidung.min' 		=>	'Nội dung phải lớn hơn 10 kí tự.',
		'noidung.max'		=>	'Nội dung quá dài. Nội dung phải nhỏ hơn 5000 kí tự',
		'image1.mimes'		=>  'vui lòng nhập đúng định dạng hình ảnh',
		'image2.mimes'		=>  'vui lòng nhập đúng định dạng hình ảnh',
		'image3.mimes'		=>  'vui lòng nhập đúng định dạng hình ảnh',
		'image4.mimes'		=>  'vui lòng nhập đúng định dạng hình ảnh',
		'image5.mimes'		=>  'vui lòng nhập đúng định dạng hình ảnh',
		'image6.mimes'		=>  'vui lòng nhập đúng định dạng hình ảnh',
		'image1.max'		=>  'Dung lượng hình ảnh không quá 2M.',
		'image2.max'		=>  'Dung lượng hình ảnh không quá 2M.',
		'image3.max'		=>  'Dung lượng hình ảnh không quá 2M.',
		'image4.max'		=>  'Dung lượng hình ảnh không quá 2M.',
		'image5.max'		=>  'Dung lượng hình ảnh không quá 2M.',
		'image6.max'		=>  'Dung lượng hình ảnh không quá 2M.',
		);
}