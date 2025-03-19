<!-- $_GET : $_GET is a super global variable used to collect data from the HTML form after submitting it. When form uses method get to transfer data, the data is visible in the query string, therefore the values are not hidden. $_GET super global array variable stores the values that come in the URL. -->
<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
</head> 
<body bgcolor="cyan">	 
	<?php
		$name = $_GET['name']; 
		$city = $_GET['city']; 
		echo "<h1>This is ".$name." of ".$city."</h1><br>"; 
	?> 
	<img src = "2.jpg" alt = "nanilake" height = "400" width="500" /> 
</body> 
</html> 
