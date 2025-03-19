<?php

//function runs each array element in a user-defined function. The array's keys and values are parameters in the function.
$array4 = array('check',"TOPS","techno",123,123.123,true);
echo "<pre>";
print_r($array4);

// echo $array4[0];
// echo $array4[1];
// echo $array4[2];
foreach ($array4 as $key => $value) {
	echo $value;
}

function myfunction($value,$key)
{
echo "<br>The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");

function myMapFunction($v)
{
  return($v*$v);
}

$map_arr=array(1,2,3,4,5);
print_r(array_map("myMapFunction",$map_arr));
// print_r(array_map("myfunction",$a));


?>
