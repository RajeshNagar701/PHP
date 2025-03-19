
<?php

$a=12;

//assignment operator example
$b=$a;
echo $b; //prints 12
echo "<br>";

$a+=$b;
echo $a; //prints 24, same as a=a+b
echo "<br>";

$a-=$b;
echo $a; //prints 12, same as a=a-b=24-12
echo "<br>";

$a*=$b;
echo $a; //prints 144, same as a=a*b=12*12
echo "<br>";

$a/=$b;
echo $a; //prints 12, same as a=a/b=144/12
echo "<br>";

$a%=$b;
echo $a; //prints 0, same as a=a%b=12%12
echo "<br>";

$a.=$b;
echo $a; //prints 012, same as a=a.b=0.12=012

?> 
