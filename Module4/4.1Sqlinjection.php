<?php
//SQL Injection is Use for make data secure

$con=new mysqli("localhost","root","");
$str="hello to'ps te'ch";
$n=mysqli_real_escape_string($con,$str);
echo $n;
?>
