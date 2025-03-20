<?php
//Static keyword Example

Class MyClass
{
const CONST_VALUE = 'A constant value';
}

class OtherClass extends MyClass
{
	public static $my_static = 'static var';
	public static function doubleColon() 
	{
		echo parent::CONST_VALUE . "\n";
		echo self::$my_static . "\n";
	}
}
OtherClass::doubleColon();
?> 
