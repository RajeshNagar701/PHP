<?php
include 'model.php';
$obj1=new model();

$category=$obj1->select($con,"category");

//$subcategory=$obj1->select($con,"subcategory");

$subcategory=$obj1->join_two($con,"subcategory","category","subcategory.cat_id=category.cat_id");

if(isset($_REQUEST['subcategory']))
{
	$catid=$_REQUEST['category'];
	$name=$_REQUEST['subcat'];	
	$data=array(
		"cat_id"=>$catid,
		"sub_cat_name"=>$name		
	);
	$ins=$obj1->insert($con,"subcategory",$data);
	if($ins>0)
	{
		echo "<script>alert('Record Added')</script>";
		header("location:view_subcategory.php");
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
			"sub_cat_id"=>$did
			);
	$del=$obj1->delete($con,"subcategory",$where);
	if($del>0)
	{
		echo "<script>alert('Record Deleted')</script>";
		header("location:../view_subcategory.php");
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";
		header("location:../view_subcategory.php");	
	}
	
}

if(isset($_REQUEST['eid']))
{
	$eid=$_REQUEST['eid'];
	$where=array(
				"sub_cat_id"=>$eid
				);
	$sel=$obj1->select_where($con,"subcategory",$where);
	$subcat=$sel->fetch_object();
	if(isset($_REQUEST['edit_subcategory']))
	{
		$catid=$_REQUEST['category'];
		$name=$_REQUEST['subcat'];	
		$data=array(
			"cat_id"=>$catid,
			"sub_cat_name"=>$name		
		);
			$upd=$obj1->update($con,"subcategory",$data,$where);
			if($upd>0)
			{
				header("location:view_subcategory.php");
			}
			else
			{
				echo "<script>alert('Error in Update')</script>";
			}

	}
	
	
}

?>






