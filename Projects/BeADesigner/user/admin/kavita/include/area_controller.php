<?php
include 'model.php';
$obj1=new model();

$city=$obj1->select($conn,"city");

$area=$obj1->join_two($conn,"area","city","area.city_id=city.city_id");
//$area=$obj1->join_three($conn,"area","city","area.city_id=city.city_id","state","city.state_id=state.state_id");


//if(isset($_REQUEST['addsubcategory']))
//{
//	header('location:addsubcategory.php');
//}
//insert
if(isset($_REQUEST['area']))
{
	$city_id=$_REQUEST['city'];
	$name=$_REQUEST['areanm'];	
	$data=array(
		"city_id"=>$city_id,
		"area_name"=>$name		
	);
	$ins=$obj1->insert($conn,"area",$data);
	if($ins>0)
	{
		echo "<script>alert('Record Added')</script>";
		header('location:view_area.php');
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
			"area_id"=>$did
			);
	$del=$obj1->delete($conn,'area',$where);
	if($del>0)
	{
		echo "<script>alert('Record Deleted')</script>";
		header("location:view_area.php");
	}
	else
	{
		echo "<script>alert('Error in Delete')</script>";
		//header("location:view subcategory.php");	
	}
	
}
//<br /><b>Notice</b>:  Undefined variable: subcat in <b>C:\xampp\htdocs\admin\kavita\edit_subcategory.php</b> on line <b>102</b><br /><br /><b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\admin\kavita\edit_subcategory.php</b> on line <b>102</b><br />
/*if(isset($_REQUEST['eid']))
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
	
	
}*/

?>






