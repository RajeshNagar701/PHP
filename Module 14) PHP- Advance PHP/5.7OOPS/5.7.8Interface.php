<?php
//interface is use when we use multiple and hybride inheritance
interface A
{
	function foo();
	function bar();
	function MyFun(){
		echo "yes";
	}
}
// Implement the interface
// This will work
class B implements A
{
	function foo()
	{
		echo "In Foo method(class B)";
	}
	function bar()
	{
		echo "In Bar method(class B)";
	}
}
// This will not work
//Fatal error: Class C contains 1 abstract method 
//and must therefore be declared abstract or implement 
//the remaining methods (A::foo) 
class C implements A
{
	function bar()
	{
		echo "In Bar method(class c)";
	}
}
?>
