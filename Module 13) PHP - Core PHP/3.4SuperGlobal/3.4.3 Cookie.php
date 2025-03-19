<!--Example of Cookie -->
<?php


if (isset($_REQUEST['Login'])) {
	# code...


$_SESSION['UserData'] = array("UserName"=>$_REQUEST['uname'],'Password'=>$_REQUEST['Password'],'Gender'=>'Male');

setcookie('username',$_REQUEST['uname'],time()+3600);

header("location:view.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<table border="1" align="center">
		<tr>
			<td>User Name</td>
			<td>
				<input type="text" name="uname">	
			</td>
		</tr>
		<tr>
			<td>PASsword</td>
			<td>
				<input type="Password" name="Password">
			</td>
		</tr>
		<tr>
			<td colspan="2">
	<input type="submit" value="Login"  name="Login">
	<input type="reset" value="cancel">
				
			</td>
		</tr>
	</table>
</form>

</body>
</html>
