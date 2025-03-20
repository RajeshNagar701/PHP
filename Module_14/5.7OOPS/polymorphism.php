
<?php
/*

Polymorphism in PHP
This word is can from Greek word poly and morphism. 
Poly means "many" and morphism means property which help 
us to assign more than one property. 


*/

//=> Overriding When same methods defined in parents and child class 
//with same signature
 
//i.e know as method overriding


class abc
{
	function sum($a,$b)
	{
		echo $a+$b;
	}
}
class xyz extends abc
{
	
	function sum($a,$b)
	{
		abc::sum(5,10);
		echo $a*$b;
	}
}

$obj=new xyz;
$obj->sum(5,10);
