<?php
// /With Type hinting we can specify the expected data type (arrays, objects, interface, etc.) for an argument in a function declaration
class MyClass
{
	public function test(OtherClass $otherclass) 
	{
	echo $otherclass->var;
	} 

	public function test_array(array $input_array) 
	{
	print_r($input_array);
	}
}
// Another example class
class OtherClass {
public $var = 'Hello World';
} 
// An instance of each class
$myclass = new MyClass;
$otherclass = new OtherClass;
$myclass->test($otherclass);
$myclass->test_array(array('a', 'b', 'c'));
?>
