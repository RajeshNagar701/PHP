<!-- $_POST : It is a super global variable used to collect data from the HTML form after submitting it. When form uses method post to transfer data, the data is not visible in the query string, because of which security levels are maintained in this method. -->
<!DOCTYPE html> 
<html> 
<body> 

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<label for="name">Please enter your name: </label> 
<input name="name" type="text"><br> 
<label for="age">Please enter your age: </label> 
<input name="age" type="text"><br> 
<input type="submit" value="Submit"> 
<button type="submit">SUBMIT</button> 
</form> 
<?php
$nm=$_POST['name']; 
$age=$_POST['age']; 
echo "<strong>".$nm." is $age years old.</strong>"; 
?> 
</body> 
</html> 
