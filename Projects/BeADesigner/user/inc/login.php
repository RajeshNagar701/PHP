<?php
include 'model.php';
$obj1=new model();

$role=$obj1->select($con,"role");
if(isset($_REQUEST['login']))
{
	  $name=$_REQUEST['name'];
	  $pass=$_REQUEST['pass'];
	  $role=$_REQUEST['role'];
	  $where=array(
	  		"name"=>$name,
			"password"=>$pass,
			"role_id"=>$role);
	  $sellog=$obj1->select_where($con,"admin",$where);
	  $count=$sellog->num_rows;
	  echo $count;exit;
	  if($count>0)
	  {
		  session_start();
		  $fetch=$sellog->fetch_object();
		  $_SESSION['name']=$fetch->name; 
		  $_SESSION['id']=$fetch->id;
		  $_SESSION['admin_role']=$fetch->roll_id; 
		  //$u=$fetch->uid; 
		  header("location:dashboard.php");
	  }
	  else
	  {
		  echo "<script>alert('wrong password')</script>";
	  }
}

if(isset($_REQUEST['forgot_password']))
{
	$name=$_REQUEST['name'];
	$where=array("name"=>$name);
	$us=$obj1->select_where($con,"admin",$where);
	$cnt=$us->num_rows;
	if($cnt>0)
	{
		$user=$us->fetch_object();
		$pass=$user->password;
		echo "<script>alert('Your Password is $pass')</script>";	
	}
	else
	{
		echo "<script>alert('No Data Found');</script>";
			
	}
	
}

if(isset($_REQUEST['change_pass']))
{
	$opass=$_REQUEST['old_pass'];
	$npass=$_REQUEST['new_pass'];
	$cpass=$_REQUEST['con_pass'];
	
	$where=array("password"=>$opass);
	
	$data=array("password"=>$npass);
	
	if($npass==$cpass)
	{
		$us=$obj1->select_where($con,"admin",$where);
		$cnt=$us->num_rows;
		
		if($cnt>0)
		{
			$user=$us->fetch_object();
			$pass=$user->password;
			
			if($opass==$pass)
			{
				 session_start();
				 $id=$_SESSION['id'];
				 $where1=array("id"=>$id);
				 $p=$obj1->update($con,"admin",$data,$where1);
				 if($p>0)
				 {	
				 	echo "<script>alert('Password successfully changed')</script>";
				 }
				 else
				 {
					echo "<script>alert('Error in password change')</script>"; 
				 }
		
			}
			else
			{
				echo "<script>alert('Your Password does not match')</script>";	
			}
		}
	}
	else
	{
		echo "<script>alert('New and Confirm Password not matched')</script>";	
	}

}


?>






