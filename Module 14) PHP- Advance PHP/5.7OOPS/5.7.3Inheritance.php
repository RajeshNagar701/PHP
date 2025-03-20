<?php
//Example of Single Inheritance

class MyClass
{
	protected function myFunc() {
	echo "MyClass::myFunc()\n";
	}
}
class OtherClass extends MyClass
{
	// Override parent's definition
	function OtherClass(){
		echo "called";
	}
	public function myFunc()
	{
	// But still call the parent function
	parent::myFunc();
	echo "OtherClass::myFunc()\n";
	}
}
$class = new OtherClass();
$class->myFunc();
?>
