<?php 
namespace App\DTT\Services;
class Form extends \Illuminate\Support\Facades\Form {
	protected static $control_class = 'form-control';

	public static function text($name, $value = null, $options = array())
	{
		if( ! isset($options['class']))
		{
			$options['class'] = self::$control_class;
		}
		return parent::text($name, $value, $options);
	}
	public static function password($name, $options = array())
	{
		if( ! isset($options['class']))
		{
			$options['class'] = self::$control_class;
		}
		return parent::password($name, $options);
	}
	public static function input($type, $name, $value = null, $options = array())
	{
		if( ! isset($options['class']))
		{
			$options['class'] = self::$control_class;
		}
		return parent::input($type, $name, $value, $options);
	}
	public static function email($name, $value = null, $options = array())
	{
		if( ! isset($options['class']))
		{
			$options['class'] = self::$control_class;
		}
		return parent::email($name, $value, $options);
	}
	public static function url($name, $value = null, $options = array())
	{
		if( ! isset($options['class']))
		{
			$options['class'] = self::$control_class;
		}
		return parent::url($name, $value, $options);
	}
	public static function textarea($name, $value = null, $options = array())
	{
		if( ! isset($options['class']))
		{
			$options['class'] = self::$control_class;
		}
		return parent::textarea($name, $value, $options);
	}
	public static function number($name, $value = null, $options = array())
	{
		if( ! isset($options['class']))
		{
			$options['class'] = self::$control_class;
		}
		return parent::number($name, $value, $options);
	}
	public static function select($name, $list = array(), $selected = null, $options = array())
	{
		if( ! isset($options['class']))
		{
			$options['class'] = self::$control_class;
		}
		return parent::select($name, $list, $selected, $options);
	}
	public static function button($value = null, $options = array())
	{
		if( ! isset($options['class']))
		{
			$options['class'] = 'btn btn-default';
		}
		return parent::button($value, $options);
	}
}