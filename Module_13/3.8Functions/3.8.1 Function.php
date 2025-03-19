<?php
//Simple function START
function functionname(){
	echo "Hello";
	
}
functionname();//call function
//Simple function END


//parameterised function
function SumOfTow($a,$b){
	$sum = $a+$b;
	return $sum;
	
}
echo SumOfTow(10,20);
//end parameterised function


//default parametrised function 
function sayHello($name="Tops"){  
echo "Hello $name<br/>";  
}  
sayHello("Margi");//output=margi  
sayHello();//passing no value  //opuput=Tops
sayHello(null);//output blank
//default function end 


//recursive function=function call into function=use in find factorial numbers
function fact($n){
	return $n*(fact(n-1));
}
fact(4); //ans=4*3*2*1=24


//end recursive function

?>
