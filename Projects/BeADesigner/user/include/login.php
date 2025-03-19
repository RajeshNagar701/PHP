<?php
//session_start();
include 'model.php';
$obj1=new model();

if(isset($_REQUEST['login']))
{
	  $name=$_REQUEST['admin_name'];
	  $pass=$_REQUEST['password'];
	  $where=array("admin_name"=>$name,"password"=>$pass);
	  $sellog=$obj1->select_where($conn,"admin",$where);
	  $count=$sellog->num_rows;
	  //echo $count;exit;
	  if($count>0)
	  {
	
		  $fetch=$sellog->fetch_object();
		  session_start();
		  $_SESSION['name']=$fetch->admin_name; 
		  $_SESSION['id']=$fetch->admin_id; 
		  //$u=$fetch->uid; 
		  header("location:home.php");
	  }
	  else
	  {
		  echo "<script>alert('wrong password')</script>";
	  }
}
if(isset($_REQUEST['change_password']))
{
	
	$opass=$_REQUEST['old_pass'];
	$npass=$_REQUEST['new_pass'];
	$cpass=$_REQUEST['con_pass'];
	
	$where=array("password"=>$opass);
	
	$data=array("password"=>$npass);
	
	if($npass==$cpass)
	{
		$us=$obj1->select_where($conn,"admin",$where);
		$cnt=$us->num_rows;
		
		if($cnt>0)
		{
			$user=$us->fetch_object();
			$pass=$user->password;
			
			if($opass==$pass)
			{
				session_start();
				 $id=$_SESSION['id'];
				 $where1=array("admin_id"=>$id);
				 $p=$obj1->update($conn,"admin",$data,$where1);
				 if($p>0)
				 {	
				 	echo "<script>alert('Password successfully changed')</script>";
					header("location:home.php");
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
