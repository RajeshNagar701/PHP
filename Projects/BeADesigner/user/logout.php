<?php
session_start();
if(isset($_SESSION['id']))
{
	//unset($_SESSION['lname']);
	session_destroy();	
	header("location:index.php");
}

?>