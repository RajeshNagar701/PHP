<?php
include 'model.php';
$obj1=new model();

$design=$obj1->select($conn,"design");

//insert
if(isset($_REQUEST['addproduct']))
{
	
	$product=$_REQUEST['product'];
	$image=$_FILES['image']['name'];
	$tmp=$_FILES['image']['tmp_name'];
	//$desc=$_REQUEST['desc'];
	//$colour=$_REQUEST['colour'];
	$price=$_REQUEST['price'];
	
	//$size=$_REQUEST['size'];
	$qty=$_REQUEST['qty'];
	//$index = "0";
	//if($_REQUEST['index'] == "on") $index= "1";
	$data=array(
		"name"=>$product,
		"image"=>$image,
		//"colour"=>$colour,
		"price"=>$price,
		
		//"size"=>$size,
		"qty"=>$qty,
		
		
	);
	$ins=$obj1->insert($conn,"design",$data);
	
	if($ins>0)
	{
		move_uploaded_file($tmp,"image/".$image);
		echo"<script>alert('insert')</script>";
		header('location:view_custom_product.php');
	}
	else
	{
		echo"<script>alert('error in insert')</script>";
	}
}

//delete
if(isset($_REQUEST['did']))
{
	$did=$_REQUEST['did'];
	$where=array(
			"image_id"=>$did
			);
	$ph=$obj1->select_where($conn,"design",$where);
	$pho=$ph->fetch_object();
	$image=$pho->image;
	
	$image="image/".$image;
	
	unlink($image);
	$del=$obj1->delete($conn,"design",$where);
	if($del>0)
	
	{
		echo "<script>alert('Record Deleted')</script>";
		header("location:../kavita/view_custom_product.php");
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";
		//header("location:../kavita/view_subcategory.php");	
	}
	
}
?>