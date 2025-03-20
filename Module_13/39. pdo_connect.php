<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'learn_vern';

try{
	$con = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
	$con->setAttribute(PDO::ATTR_CASE,PDO::CASE_UPPER);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "Connection Successful.";

	$sql = "SELECT * FROM products";
	$exec = $con->prepare($sql);
	$exec->execute();

	echo "<pre>";
	echo "<br>Returns Indexed array<br>";
	$result = $exec->fetch(PDO::FETCH_NUM);
	print_r($result);

	echo "<br>Returns Associative array<br>";
	$result2 = $exec->fetch(PDO::FETCH_ASSOC);
	print_r($result2);

	echo "<br>Returns Indexed & Associative(Both) array<br>";
	$result3 = $exec->fetch(PDO::FETCH_BOTH);
	print_r($result3);

	echo "<br>Returns Object<br>";
	$result4 = $exec->fetch(PDO::FETCH_OBJ);
	print_r($result4);

} catch(PDOException $ex){
	echo "Connection Failed: " . $ex->getMessage();
}

?>