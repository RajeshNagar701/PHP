<?php
//fetch data from database

include('connection.php');

//create session for login
session_start();

if(isset($_SESSION['login']))
{
	echo "welcome ".$_SESSION['login'];
	echo "<a href='logout.php'>Logout</a>";
}
else
{
	header("location:login.php");
}

//select data for fetching records
$sql="select * from employee";

//fetch records order by
//$sql="select * from employee order by employeename"

//fetch records group by
//$sql="select * from employee  group  by employeename"


	
$que=$con->query($sql);

//delete data from table
if(isset($_REQUEST['did']))
{
	$d=$_GET['did'];

	$sql1="delete from employee where empid='$d'";
	$que1=$con->query($sql1);
	echo "Record Deleted!";
	header("location:select.php");
}

if(isset($_POST['deleteall']))
{
	$chk=$_POST['chk'];
	$c=count($chk);
	//print_r($chk);
	for($i=0;$i<$c;$i++)
	{

		echo $sql2="delete from employee where empid='$chk[$i]'";
		$que2=$con->query($sql2);

	}
	header("location:select.php");
}
//exit();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
<table border="1">
	<th></th>
	<th>Emp ID</th>
	<th>Name</th>
	<th>Gender</th>
	<th>Contact</th>
	<th>Address</th>
	<th>Photo</th>
	<?php
	while($row=$que->fetch_object())
	{
	?>
	<tr>
		<td><input type="checkbox" name="chk[]" value="<?php echo $row->empid; ?>"></td>
		<td><?php echo $row->empid ?></td>
		<td><?php echo $row->empname ?></td>
		<td><?php echo $row->gender ?></td>
		<td><?php echo $row->contact ?></td>
		<td><?php echo $row->address ?></td>
		<td><img src="upload/<?php echo $row->photo ?>" height="100" width="100" alt=" "></td>
		<td><a href="select.php?did=<?php echo $row->empid ?>">
			Delete
		</a></td>
		
		<td><a href="insert.php?eid=<?php echo $row->empid ?>">
			Edit
		</a></td>
	</tr>

	<?php
	}
	?>
	<tr>
	<td><input type="submit" name="deleteall" value="deleteall"></td>
</tr></table>
</form>
</body>
</html>
