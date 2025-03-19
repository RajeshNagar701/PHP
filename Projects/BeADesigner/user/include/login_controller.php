<?php
include 'model.php';
$obj1=new model();

if(isset($_REQUEST['SignIn']))
{
	
	  $name=$_REQUEST['email'];
	  $pass=$_REQUEST['password'];
	  $where=array("email_id"=>$name,"password"=>$pass);
	  $sellog=$obj1->select_where($conn,"customer",$where);
	  $count=$sellog->num_rows;
	 //echo $count;exit;
	  if($count>0)
	  {
		  session_start();
		  $fetch=$sellog->fetch_object();
		  $_SESSION['email']=$fetch->email_id; 
		  $_SESSION['id']=$fetch->customer_id; 
		  $_SESSION['user']=$fetch->f_name; 
		  //$u=$fetch->uid; 
		  header("location:index.php");
	  }
	  else
	  {
		  echo "<script>alert('wrong password')</script>";
	  }
}
//forgot_password

if(isset($_REQUEST['forgot_password']))
{
	$name=$_REQUEST['name'];
	$where=array("name"=>$name);
	$us=$obj1->select_where($conn,"customer",$where);
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

// change password

if(isset($_REQUEST['change_pass']))
{
	$opass=$_REQUEST['old_pass'];
	$npass=$_REQUEST['new_pass'];
	$cpass=$_REQUEST['con_pass'];
	
	$where=array("password"=>$opass);
	
	$data=array("password"=>$npass);
	
	if($npass==$cpass)
	{
		$us=$obj1->select_where($conn,"customer",$where);
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
				 $p=$obj1->update($conn,"customer",$data,$where);
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






