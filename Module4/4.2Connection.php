<?php
$con=new mysqli('localhost','root','','18_feb');
if($con==true)
{

	echo "connected";
}
else
{
  die();
  echo "Not Connect!";
}
?>
