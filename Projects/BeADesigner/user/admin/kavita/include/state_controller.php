<?php
include 'model.php';
$obj1=new model();

$state=$obj1->select($conn,"state");



//insert
if(isset($_REQUEST['state']))
{
	$name=$_REQUEST['statenm'];	
	$data=array(
		"state_name"=>$name		
			   );
	$ins=$obj1->insert($conn,"state",$data);
	if($ins>0)
	{
		echo "<script>alert('Record Added')</script>";
		header('location:view_state.php');
	}
	else
	{
		echo "<script>alert('Error in Insert')</script>";
		//header('location:addcategory.php');
	}
	
	
}
//delete
if(isset($_REQUEST['did']))
{
	$did=$_REQUEST['did'];
	$where=array(
			"state_id"=>$did
			);
	$del=$obj1->delete($conn,"state",$where);
	if($del)
	{
		echo "<script>alert('Record Deleted')</script>";
		header('location:view_state.php');
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";
		//header('location:addcategory.php');
	}
	
}
/*edit
if(isset($_REQUEST['eid']))
{
	
	
	$eid=$_REQUEST['eid'];
	$where=array(
				"category_id"=>$eid
				);
	$sel=$obj1->select_where($conn,"category",$where);
	$fet=$sel->fetch_object();
	if(isset($_REQUEST['save']))
	{
		$category_name=$_REQUEST['cat'];
		$data=array(
				"category_name"=>$category_name
				);
			$upd=$obj1->update($conn,"category",$data,$where);
			if($upd>0)
			{
				header("location:view category.php");
			}
			else
			{
				echo "<script>alert('Error in Update')</script>";
			}

	}

	
	
}*/
?>
