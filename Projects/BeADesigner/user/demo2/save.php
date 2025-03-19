<?php
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);
$path='../designed_product/img.png';
//Save the image
file_put_contents($path, $unencodedData);
header("location:../order_product.php");
?>
