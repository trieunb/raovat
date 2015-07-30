<?php
namespace Drivers\Curl;
class Curl {
	private static $url;
	private static $postVar;
	private static $cookie;
	public static function post($url = 'http://google.com', $postVar = '', $cookie = '')
	{
		self::$url = $url;
		self::$postVar = $postVar;
		self::$cookie = $cookie;
		return self::init();
	}
	private static function init()
	{
		$ch = curl_init();
		if(self::$postVar) {
			curl_setopt($ch, CURLOPT_POST ,1);
			curl_setopt ($ch, CURLOPT_POSTFIELDS, self::$postVar);
		}
		curl_setopt($ch, CURLOPT_URL, self::$url); 
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/23.0"); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		if (self::$cookie) { 
			curl_setopt($ch, CURLOPT_COOKIEJAR, str_replace('\\','/', public_path()).'/cookies/'.self::$cookie);
			curl_setopt($ch, CURLOPT_COOKIEFILE, str_replace('\\','/', public_path()).'/cookies/'.self::$cookie);    
		} 
		@curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
		$result=curl_exec ($ch); 
		curl_close ($ch); 
		return $result; 
	}
	public static function get3Str($str1, $str2, $str3, $str)
	{
		$s = explode($str1, $str);
		if(count($s)<2) return $s[0];
		$s = explode($str2, $s[1]);
		if(count($s)<2) return $s[0];
		$s = explode($str3, $s[1]);
		return $s[0];
	}
	public static function get2Str($str1, $str2, $str)
	{
		$s = explode($str1, $str);
		if(count($s)<2) return $s[0];
		$s = explode($str2, $s[1]);
		return $s[0];
	}
}