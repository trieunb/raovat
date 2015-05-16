<?php 

namespace App\DTT\Services;
use Swift_SmtpTransport, Config,Swift_Message,Swift_Mailer;

class SendMail {
	
	protected static $message;
	protected static $subject;
	protected static $to;
	protected static $name_to;
	protected static $host;
	protected static $port;
	protected static $encryption;
	protected static $username;
	protected static $name;
	protected static $password;

	public static function send($to, $name_to, $subject, $message)
	{
		self::setSubject($subject);
		self::setMessage($message);
		self::setTo($to);
		self::setNameto($name_to);
		self::init();
		$transport = Swift_SmtpTransport::newInstance(self::getHost(), self::getPort(), self::getEncription() )
		   ->setUsername(self::getUsername())
		   ->setPassword(self::getPassword());
		
		// creating the Swift_Mailer instance and pass the config settings
		$mailer = Swift_Mailer::newInstance($transport);
		 
		// configuring the Swift mail instance with all details
		$message = Swift_Message::newInstance(self::$subject)
		  ->setFrom(array(self::getUsername() => self::getName()))
		  ->setTo(array(self::$to => self::$name_to))
		  ->setBody(self::$message, 'text/html');
		try
		  {
		    $mailer->send($message);
		    return true;
		  }
		  catch (Exception $e)
		  {
		    return false;
		  }
	}
	protected static function setSubject($subject)
	{
		return self::$subject = $subject;
	}
	protected static function setMessage($message)
	{
		return self::$message = $message;
	}
	protected static function setTo($to)
	{
		return self::$to = $to;
	}
	protected static function setNameto($name_to)
	{
		return self::$name_to = $name_to;
	}
	protected static function getHost()
	{
		return self::$host;
	}
	protected static function getPort()
	{
		return self::$port;
	}
	protected static function getEncription()
	{
		return self::$encryption;
	}
	protected static function getUsername()
	{
		return self::$username;
	}
	protected static function getName()
	{
		return self::$name;
	}
	protected static function getPassword()
	{
		return self::$password;
	}

	protected static function init()
	{
		$config = Config::get('swift_mailer.config');
		foreach ($config as $key => $value) {
			self::$$key = $value;
		}
	}

}