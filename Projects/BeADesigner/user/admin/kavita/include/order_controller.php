<?php
include 'model.php';
$obj1=new model();

$order=$obj1->select($conn,"user_order");




//delete
if(isset($_REQUEST['did']))
{
	$did=$_REQUEST['did'];
	$where=array(
			"order_id"=>$did
			);
	$del=$obj1->delete($conn,"user_order",$where);
	if($del)
	{
		echo "<script>alert('Record Deleted')</script>";
		header('location:manage order.php');
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";
		//header('location:addcategory.php');
	}
	
}

?>
