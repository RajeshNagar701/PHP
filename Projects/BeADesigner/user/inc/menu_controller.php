<?php
include 'model.php';
$obj=new model();

//$category=$obj->select($con,"category");
//$subcategory=$obj->join_two($con,"subcategory","category","subcategory.cat_id=category.cat_id");

if(isset($_REQUEST['category']))
{
	$name=$_REQUEST['cat'];	
	$data=array(
		"cat_name"=>$name		
	);
	$ins=$obj->insert($con,"category",$data);
	if($ins>0)
	{
		echo "<script>alert('Record Added')</script>";
		header("location:view_category.php");
	}
	else
	{
		echo "<script>alert('Error in Insert')</script>";	
	}
	
	
}

//delete
if(isset($_REQUEST['did']))
{
	$did=$_REQUEST['did'];
	$where=array(
			"cat_id"=>$did
			);
	$del=$obj->delete($con,"category",$where);
	if($del>0)
	{
		echo "<script>alert('Record Deleted')</script>";
		header("location:view_category.php");
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";	
	}
	
}
if(isset($_REQUEST['eid']))
{
	$eid=$_REQUEST['eid'];
	$where=array(
				"cat_id"=>$eid
				);
	$sel=$obj->select_where($con,"category",$where);
	$fet=$sel->fetch_object();
	if(isset($_REQUEST['update_category']))
	{
		$cat_name=$_REQUEST['cat'];
		$data=array(
				"cat_name"=>$cat_name
				);
			$upd=$obj->update($con,"category",$data,$where);
			if($upd>0)
			{
				header("location:view_category.php");
			}
			else
			{
				echo "<script>alert('Error in Update')</script>";
			}

	}
	
	
}

?>






