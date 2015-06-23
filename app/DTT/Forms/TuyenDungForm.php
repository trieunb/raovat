<?php 
namespace App\DTT\Forms;
class TuyenDungForm extends FormValidator {

	protected $rules = array(
		'tencty'	=>	'required|min:4|max:255',
		'diachi'	=>	'required',
		'linhvuc'	=> 	'required',
		'vitrituyendung'	=>	'required',
		'nguoidangtin'	=>	'required',
		'chucvu'	=>	'required',
		'sodienthoai'	=>	'required'

		
		);
	protected $messages = array(
		'tencty.required'	=>	'Tiêu đề không được trống.',
		'diachi.required'	=>	'Địa chỉ không được trống.',
		'linhvuc.required'	=>	'Lĩnh vực không được trống.',
		'vitrituyendung.required'	=>	'Vị trí tuyển dụng không được trống.',
		'nguoidangtin.required'	=>	'Người đăng tin không được trống.',
		'chucvu.required'	=>	'Chức vụ không được trống.',
		'sodienthoai.required'	=>	'Số điện thoại không được trống.',

		);
}