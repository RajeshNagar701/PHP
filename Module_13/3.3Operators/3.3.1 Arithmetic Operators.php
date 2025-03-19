<!--Example of All Arithmetic Operator -->
<?php

$a = 10;
$b = 5;
$c = 3;
$d = 8;

//addition example
$add=$a + $b;
echo $add; //prints 15
echo "<br>";

//subtraction example
$sub = $a - $b;
echo $sub; //prints 5
echo "<br>";

//multiplication example
$mul = $a * $b;
echo $mul; //prints 50
echo "<br>";

//division example
$div = $a / $b;
echo $div; // prints 2
echo "<br>";
echo $a/$c; //prints 3.3333333333333
echo "<br>";
echo $d/$c; //prints 2.6666666666667
echo "<br>";

//modulus example
$mod= $a % $b;
echo $mod;
echo "<br>"; //prints 0

//Negation example
$neg = -$a;
echo $neg; //prints -10;
echo "<br>";

//Concatenation example
$str1="Pankaj";
$str2="Kumar";

echo $str1 . " " . $str2; //prints "Pankaj Kumar"
echo "<br>";

echo $a . $b; //prints 105
echo "<br>";

echo $c . $d; //prints 38
?> 
