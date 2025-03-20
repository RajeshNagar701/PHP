<?php
//XML file for fetching data from database using PHP

$con=new mysqli('localhost',"root","","18_feb");
$file=fopen("demo.xml","w");
$txt='<?xml version="1.0" ?>';

$sql="select * from employee";
$que=$con->query($sql);


$txt.="<employee>";
while($row=$que->fetch_object())
{
	$txt.="<empname>".$row->empname."</empname>";
}
$txt.="</employee>";

fwrite($file,$txt);
fclose($file);

$ex=simplexml_load_file("demo.xml");
print_r($ex);
?>


