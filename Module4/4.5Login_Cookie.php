<?php
//cookie create on login

$con=new mysqli("localhost","root","","beadesigner");
if(isset($_POST['login']))
{
	$u=$_POST['uname'];
	$p=$_POST['pass'];
	$sql="select * from admin where username='$u' and password='$p'";
	$que=$con->query($sql);
	$row=$que->fetch_object();

	if(count($row)>0)
	{
		if(isset($_POST['remember']))
		{
			setcookie("cookielogin",$u,time()+20);	
		}
		
	}		
	else
	{
		echo "wrong username and password!";
	}
}

//remember me code for set cookie
if(isset($_COOKIE['cookielogin']))
{
	$u=$_COOKIE['cookielogin'];
}
else
{
	$u="";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	Username:<input type="text" name="uname" value="<?php echo $u ?>">
	<br>
	Password:<input type="password" name="pass">
	<br>
	<input type="checkbox" name="remember">Remember Me
	<br>
	<input type="submit" name="login">
</form>
</body>
</html>
