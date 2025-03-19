<?php
//insert data from form in to database
include('connection.php');
if(isset($_POST['insert']))
{
	$name=$_POST['ename'];
	$g=$_POST['gen'];
	$c=$_POST['con'];
	$a=$_POST['add'];
	$d=$_POST['doj'];
	$s=$_POST['sal'];
	$l=implode(",",$_POST['chk']);//add multiple checkbox value in database
	$p=$_FILES['photo']['name'];
	
	//insert query for insert data
	$sql="insert into employee values('','$name','$g','$c','$a','$d','$s','$l','$p')";
	$que=$con->query($sql);
	
	//file upload code 
	move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$p);
	
}

//update data from form to database
if(isset($_REQUEST['eid']))
{
	$d=$_GET['eid'];
	
	//fetch data for update data
	$sql="select * from employee where empid='$d'";
	$que=$con->query($sql);
	$row1=$que->fetch_object();
	if(isset($_POST['update']))
	{
	$name=$_POST['ename'];
	$g=$_POST['gen'];
	$c=$_POST['con'];
	$a=$_POST['add'];
	$d1=$_POST['doj'];
	$s=$_POST['sal'];
	$l=implode(",",$_POST['chk']);
	$p=$_FILES['photo']['name'];
	
	//update query for update data	
	$sql="update  employee set empname='$name',gender='$g',contact='$c',address='$a',doj='$d1',salary='$s',language='$l',photo='$p' where empid=$d";
	$que=$con->query($sql);
	move_uploaded_file($_FILES['photo']['tmp_name'],"upload/".$p);
	
	header("location:select.php");
	}

}








?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//fetch data for update
	if(isset($_REQUEST['eid']))
	{
	?>
<form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="ename" value="<?php echo $row1->empname ?>">
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gen" value="male"
				<?php
				if($row1->gender=='male')
				{
					echo "checked";
				}
				?>
				>Male
				<input type="radio" name="gen" value="female"
				<?php
				if($row1->gender=='female')
				{
					echo "checked";
				}
				?>
				>Female
			</td>
		</tr>
		<tr>
			<td>Contact</td>
			<td>
				<input type="text" name="con" value="<?php echo $row1->contact ?>">
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<textarea name="add">
					<?php echo $row1->address ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>DOJ</td>
			<td>
				<input type="date" name="doj" value="<?php  echo $row1->doj ?>">
			</td>
		</tr>
		<tr>
			<td>Salary	</td>
			<td>
				<input type="text" name="sal"  value="<?php echo $row1->salary ?>" >
			</td>
		</tr>
		<tr>
			<td>Language</td>
			<td>
				<?php
				$ex=explode(",",$row1->language);

				?>
				<input type="checkbox" name="chk[]" value="english"
				<?php
				if(in_array("english",$ex))
				{
					echo "checked";
				}
				?>
				>English

				<input type="checkbox" name="chk[]" value="gujarati"
				<?php
				if(in_array("gujarati",$ex))
				{
					echo "checked";
				}
				?>
				>Gujarati

				<input type="checkbox" name="chk[]" value="hindi"
				<?php
				if(in_array("hindi",$ex))
				{
					echo "checked";
				}
				?>
				>Hindi
			</td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<input type="file" name="photo">
				<img src="upload/<?php echo $row1->photo ?>" height="100" width="100">
			</td>
		</tr>

		<tr>
			<td>
				<input type="submit" name="update"  value="update">
			</td>
		</tr>
		
	</table>
</form>

	<?php
	}
	else
	{
		//for insert data form
?>
<form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="ename">
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gen" value="male">Male
				<input type="radio" name="gen" value="female">Female
			</td>
		</tr>
		<tr>
			<td>Contact</td>
			<td>
				<input type="text" name="con">
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<textarea name="add"></textarea>
			</td>
		</tr>
		<tr>
			<td>DOJ</td>
			<td>
				<input type="date" name="doj">
			</td>
		</tr>
		<tr>
			<td>Salary	</td>
			<td>
				<input type="text" name="sal">
			</td>
		</tr>
		<tr>
			<td>Language</td>
			<td>
				<input type="checkbox" name="chk[]" value="english">English

				<input type="checkbox" name="chk[]" value="gujarati">Gujarati

				<input type="checkbox" name="chk[]" value="hindi">Hindi
			</td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<input type="file" name="photo">
			</td>
		</tr>

		<tr>
			<td>
				<input type="submit" name="insert">
			</td>
		</tr>
		
	</table>
</form>
<?php

	}
	?>

</body>
</html>
