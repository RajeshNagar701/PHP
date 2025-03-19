<?php

function test_odd($var)
{
return($var & 1);
}

$a1=array("a","b",2,3,4);
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
echo "<pre>";
print_r(array_keys($a1));
print_r(array_filter($a1,"test_odd"));


?>