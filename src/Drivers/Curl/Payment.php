<?php 

namespace Drivers\Curl;
use Drivers\Curl\Curl, Str, Config,Session,File;
class Payment {

	public static function make($seri = false, $pwd = false, $cardType = false, $captcha = false)
	{
		$baokim_url = Config::get('payment.bao_kim');
		$data['has'] = false; $data['message'] = 'Tham số không đủ';
		if($seri && $pwd && $cardType && $captcha) {
			$cookie = Session::get('cookie');
			$postVar = "UserCardForm%5Btype_card%5D=" . $cardType . "&UserCardForm%5Bpin%5D=" . $pwd . "&UserCardForm%5Bseri%5D=" . $seri . "&UserCardForm%5Bcaptcha%5D=".$captcha;
			$page =  Curl::post($baokim_url, $postVar, $cookie);
			@unlink(public_path() . '/cookies/'.$cookie);
			//$page = @file_get_contents('http://localhost/raovatct/public/test/success.html');
			if(stristr($page, 'id="UserCardForm_pin_em_">'))
			{
				$data['message'] = 'Mã thẻ không hợp lệ';
			} elseif(stristr($page, 'id="UserCardForm_seri_em_">')) {
				$data['message'] = 'Seri không hợp lệ';
			} elseif(stristr($page, 'id="UserCardForm_captcha_em_">')) {
				$data['message'] = 'Captcha không chính xác';
			} elseif(stristr($page, 'alert-error')) {
				$data['message'] = Curl::get3Str('data-dismiss="alert">', '</a>', '</', $page);
			} elseif(stristr($page, 'alert-success')) {//thành công
				
				$respond = Curl::get2Str('data-dismiss="alert">', '</div>', $page);
				$respond = strip_tags($respond);
				preg_match('!\d+!', $respond, $matches);
				if(isset($matches[0]))
				{
					if(is_numeric($matches[0]))
					{
						$data['has'] = true;
						$data['amount'] = $matches[0];
					} else {
						$data['message'] = 'Hệ thống đang có lỗi.';
					}
				} else {
					$data['message'] = 'Hệ thống đang có lỗi.';
				}
			} else {
				//echo $page;
			}
			return json_encode($data);
		} 
		return json_encode($data);
	}
	public static function show()
	{
		Session::set('cookie', Str::random());
		$captcha = Curl::post('http://napngay.com/tc/captcha?v='.time(), '', Session::get('cookie'));
		File::put(public_path() . '/cookies/' . Session::get('cookie') . '.png', $captcha);
		return 1;
	}
}