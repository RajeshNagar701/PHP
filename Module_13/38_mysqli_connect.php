<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'learn_vern';
//error_reporting(0);
mysqli_report(MYSQLI_REPORT_STRICT);
try{
	$con = new mysqli($servername, $username, $password, $database);
	echo "Connection Successful.";

	$sql = "SELECT * FROM products";
	$exec = $con->query($sql);
	echo "<pre>";
	
	//echo "mysqli_fetch_array($exec, MYSQLI_NUM)\n";
	echo "<br>Returns indexed array<br>";
	$result = mysqli_fetch_array($exec,MYSQLI_NUM);
	print_r($result);

	echo "<br>Returns Associative array<br>";
	$result2 = mysqli_fetch_array($exec,MYSQLI_ASSOC);
	print_r($result2);

	echo "<br>Returns Numeric & Associative array<br>";
	$result3 = mysqli_fetch_array($exec,MYSQLI_BOTH);
	print_r($result3);

	echo "<br>Returns Object<br>";
	$result4 = $exec->fetch_object();
	print_r($result4);


} catch(Exception $ex){
	echo "Connection Failed: " . $ex->getMessage();
}

?>