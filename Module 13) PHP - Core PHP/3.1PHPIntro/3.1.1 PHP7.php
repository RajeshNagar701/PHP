<?php
/* Isset Operator */
 function isValidUser(int $id) : bool 
{
	return isset($id) ? "ans": false;
}


// echo isValidUser('a'); // Error for DataType
echo isValidUser(5);


echo "<br>";
echo "<br>===================== SpaceShip Operator===============================<br>";

function order_func($a, $b) 
{	
	 // return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);  //Before PHP7
	return $a <=> $b;
}

echo order_func(20,20);

echo "<br>===================== Null Coalesce Operator Operator===============================<br>";


//Before PHP7:
if ($_GET['id'] == '') {
	echo "Its null";
}else{
	echo "get";
}
echo $id = isset($_GET['id']) ? $_GET['id'] : "nothing";
// echo $id = isset($_GET['id']) ? true : false;
echo "<br>";
//In PHP7: 
 $id = $_GET['id'] ?? "id not set"; //equivalent of writing old above syntax
echo $id;


class Logger{
	function log($msg){ echo $msg; }
}
$util = new Logger;
$util->log("hii");
// echo $util->setLogger(new Logger());


$var = "TOPS";
$_var = "TOPS";
$array = "TOPS";
// $*var = "TOPS";
// $@var = "TOPS"; //all Special char not supported exept _
// $1Var = "TOPS"; //Numeric value at starting does not allow


$num = 50;
$text = "10TOPS";
echo "<br>";
var_dump($text);
echo "<br>";
echo $num+$text;
echo "<br>";
echo $num.$text;
exit;
?>
