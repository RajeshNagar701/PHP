<?php
// array_fill diffrenciat first array to second with values only
$a1=array("a"=>"red","b"=>"green","j"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","g"=>"blue","k"=>"data");
echo "<pre>";
echo "<br>==========================  array_diff(array1, array2) =====================<br>";
$result=array_diff($a1,$a2);
print_r($a1);
print_r($a2);
print_r($result);





// array_fill diffrenciat first array to second with keys only
echo "<br>========================== array_diff_key(array1, array2)  =====================<br>";
// $array_diff_key_a1=array("a"=>"red","b"=>"green","w"=>"green","c"=>"blue");
// $array_diff_key_a2=array("a"=>"red","c"=>"blue","d"=>"pink");
$array_diff_key_a1=array("a"=>"red","b"=>"green","j"=>"blue","d"=>"yellow");
$array_diff_key_a2=array("a"=>"red","f"=>"green","g"=>"blue","k"=>"data");

$array_diff_key_result=array_diff_key($array_diff_key_a1,$array_diff_key_a2);
print_r($array_diff_key_result);


// array_fill diffrenciat first array to second with keys and values
echo "<br>========================== array_diff_assoc(array1, array2)  =====================<br>";
$assoc_a1=array("a"=>"red1","b"=>"green","g"=>"blue1","d"=>"yellow");
$assoc_a2=array("a"=>"red","f"=>"green","g"=>"blue","k"=>"data");

$assoc_result=array_diff_assoc($assoc_a1,$assoc_a2);
print_r($assoc_result);

// exit;

echo "<br>========================== array_diff_uassoc(array1, array2) =====================<br>Compare the keys and values of two arrays (use a user-defined function to compare the keys), and return the differences:<br>";


function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

echo "<br>========================== array_diff_uassoc(array1, array2)  =====================<br>";
$result=array_diff_uassoc($a1,$a2,"myfunction");
// array_diff_ukey(array1, array2)
print_r($result);





// function myfunction($a,$b)
// {
// if ($a===$b){
//   return 0;
//   }
//   return ($a>$b)?1:-1;
// }

// $a1=array("a"=>"red","b"=>"green","c"=>"blue");
// $a2=array("a"=>"blue","b"=>"black","e"=>"blue");

// $result=array_diff_ukey($a1,$a2,"myfunction");
// print_r($result);
?>