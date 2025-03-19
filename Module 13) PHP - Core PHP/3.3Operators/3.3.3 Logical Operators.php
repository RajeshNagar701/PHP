<!--Example of Logical Operator -->
<?php

$a=true;
$b=false;
$c=true;

//And example
var_dump($a and $b); //prints bool(false)
var_dump($a and $c); //prints bool(true)

var_dump($a && $b); //prints bool(false)
var_dump($a && $c); //prints bool(true)

echo "<br>";

//Or example
var_dump($a or $b); //prints bool(true)
var_dump($a or $c); //prints bool(true) 

var_dump($a || $b); //prints bool(true)
var_dump($a || $c); //prints bool(true)
echo "<br>";

//Xor example
var_dump($a xor $b); //prints bool(true)
var_dump($a xor $c); //prints bool(false)
echo "<br>";

//Not example
var_dump(!$a); //prints bool(false)
var_dump(!$b); //prints bool(true)
echo "<br>";

?> 
