<?php 

namespace App\DTT\Forms;
class NewsAddForm extends FormValidator {

	protected $rules = array(
		'tieude'	=>	'required|min:4|max:255',
		'cat_id'	=>	'required',
		'noidung'	=>	'required|min:10|max:5000',

		);
	protected $messages = array(
		'tieude.required'	=>	'Tiêu đề không được trống.',
		'tieude.min'		=>	'Độ dài tiêu đề phải từ 4 tới 255 kí tự.',
		'tieude.max'		=>	'Độ dài tiêu đề phải từ 4 tới 255 kí tự.',
		'cat_id.require'	=>	'Bạn phải chọn danh mục.',
		'noidung.required'  =>	'Bạn phải nhập nội dung rao vặt.',
		'noidung.min' 		=>	'Nội dung phải lớn hơn 10 kí tự.',
		'noidung.max'		=>	'Nội dung quá dài. Nội dung phải nhỏ hơn 5000 kí tự',
		);
}