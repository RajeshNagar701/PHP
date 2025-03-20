<?php
//same as Interface

trait first_trait
{
	function first_method()
	{
		echo "First method";
	}
	function second_method()
	{
		echo "Second Method";
	}
}
class first_class extends class S
{
//using the trait here
use first_trait;
}
$obj=new first_class();
//execution the method from trait
$obj->first_method();                 //valid
$obj->second_method();           //valid
?>
