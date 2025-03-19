<?php
include 'model.php';
$obj1=new model();



//$user_register=$obj1->select($con,"user_register");

if(isset($_REQUEST['Register']))
{
	//echo "hjhg"; exit;
		$email=$_REQUEST['email'];
        $password=$_REQUEST['pass'];
		$fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
		$gender=$_REQUEST['gender'];
		$dob=$_REQUEST['dob'];
        $address=$_REQUEST['add'];
        $contact=$_REQUEST['contact'];
		
        
	
	$data=array(
		"email_id"=>$email,
        "password"=>$password,
        "f_name"=>$fname,
		"l_name"=>$lname,
		"gender"=>$gender,
		"dob"=>$dob,
		"address"=>$address,
		"contact_no"=>$contact,
     
		);
		
		
	$f=$obj1->insert($conn,"customer",$data);
        //echo $f;exit;
	if($f>0)
	{
            
            		//echo " insert";	
				// move_uploaded_file($tmp1,"images/".$photo);
				header("location:index.php");
			}
	else
	{
		echo "Error in insert";	
	}

}
?>