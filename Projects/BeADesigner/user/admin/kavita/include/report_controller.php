<?php
	include 'model.php';
$obj1=new model();
	$customer=$obj1->select($conn,"customer");
	
	
	//status update 
if(isset($_REQUEST['sid']))
{
	$uid=$_REQUEST['sid'];
	$where=array("customer_id"=>$uid);
	$sdata=$obj1->select_where($conn,'customer',$where);
	$st=$sdata->fetch_object();
	$status=$st->status;
	if($status=='Enabled')
	{
		$data=array(
			"status"=>'Disabled');
	}
	else
	{
		$data=array(
			"status"=>'Enabled');
			
	}
	$upd=$obj1->update($conn,'customer',$data,$where);
	
	
	
	//header("location:admission_request.php");
}

?>