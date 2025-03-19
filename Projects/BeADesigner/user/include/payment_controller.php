<?php
include 'model.php';
$obj1=new model();
session_start();     

$val=array();
$t=0;
if(isset($_REQUEST['payment']))
{
	if(isset($_SESSION["cart"]))
	{
		foreach($_SESSION["cart"] as $cart_items)
        {
			$val[]=$cart_items["product_id"];
			$t=$t+$cart_items["price"];
			
		}
		//print_r($val);exit;
		
		$p=implode(",",$val);
		//echo $t;exit;
		$d=date('Y-m-d');
		$user= $_SESSION['id'];

		$data=array(
				"date"=>$d,
				"user_id"=>$user,
				"product_id"=>$p,
				"total"=>$t,
				"payment_status"=>'Done');
			$ins=$obj1->insert($conn,"user_order",$data);	
				header("location:../index.php");
				
				
	}
	
				 
	
}
?>