<?php
//interface and Abstract Class Example

interface Ainterface
{
	function functioname();
	function functioname1();
	function name(){
		echo "call";
	}
}

abstract class A
{
abstract function foo();
abstract function bar();
function test()
{
echo "In abstract Class A(test)";
}
}
//This Will work
class B extends A implements Ainterface
{
function foo()
{
echo "In class B(foo)";
}
function bar()
{
echo "In class B(bar)";
}
}
//This will not work
//give the fetal error 
//Class C contains 1 abstract method and must 
//therefore be declared abstract or implement 
//the remaining methods (A::bar)
class C extends A
{
function foo()
{
echo "In Class C(foo)";
}
}
?>
