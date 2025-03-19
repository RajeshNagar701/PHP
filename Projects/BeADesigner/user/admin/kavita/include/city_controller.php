<?php
include 'model.php';
$obj1=new model();

$state=$obj1->select($conn,"state");

$city=$obj1->join_two($conn,"city","state","city.state_id=state.state_id");

//if(isset($_REQUEST['addsubcategory']))
//{
//	header('location:addsubcategory.php');
//}
//insert
if(isset($_REQUEST['city']))
{
	$state_id=$_REQUEST['state'];
	$name=$_REQUEST['citynm'];	
	$data=array(
		"state_id"=>$state_id,
		"city_name"=>$name		
	);
	$ins=$obj1->insert($conn,"city",$data);
	if($ins>0)
	{
		echo "<script>alert('Record Added')</script>";
		header('location:view_city.php');
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
			"city_id"=>$did
			);
	$del=$obj1->delete($conn,'city',$where);
	if($del>0)
	{
		echo "<script>alert('Record Deleted')</script>";
		header("location:view_city.php");
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";
		//header("location:view subcategory.php");	
	}
	
}
//<br /><b>Notice</b>:  Undefined variable: subcat in <b>C:\xampp\htdocs\admin\kavita\edit_subcategory.php</b> on line <b>102</b><br /><br /><b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\admin\kavita\edit_subcategory.php</b> on line <b>102</b><br />
if(isset($_REQUEST['eid']))
{
	$eid=$_REQUEST['eid'];
	$where=array(
				"sub_category_id"=>$eid
				);
	$sel=$obj1->select_where($conn,"sub_category",$where);
	$subcat=$sel->fetch_object();
	
	
	if(isset($_REQUEST['editsubcategory']))
	{
		$catid=$_REQUEST['category'];
		$name=$_REQUEST['subcat'];	
		$data=array(
			"category_id"=>$catid,
			"sub_category_name"=>$name		
		);
			$upd=$obj1->update($conn,"sub_category",$data,$where);
			if($upd>0)
			{
				echo "<script>alert('Update successfully')</script>";
				header("location:view subcategory.php");
			}
			else
			{
				echo "<script>alert('Error in Update')</script>";
			}

	}
	
	
}

?>






