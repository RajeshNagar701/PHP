<!DOCTYPE html>
<html>
<head>
	<title>Grading System</title>
</head>
<body>
	<fieldset style="width: 20rem;">
		<legend>Enter your marks</legend>
		<form method="post">
			<input type="number" name="marks"><br><br>
			<input type="submit" name="send_marks"><hr>
			<?php
				$marks = $_POST['marks'];
				if($marks < 35){
					echo "<b style='color:#ff0000'> You're failed! </b>";
				} else if($marks >= 35 && $marks <= 40){
					echo "<p style='color:#00b008'> Congratulations!! You have successfully cleared this exam with 
					<b>D Grade</b>.</p>";
				} else if($marks >= 41 && $marks <= 50){
					echo "<p style='color:#00b008'> Congratulations!! You have successfully cleared this exam with 
					<b>C2 Grade</b>.</p>";
				} else if($marks >= 51 && $marks <= 60){
					echo "<p style='color:#00b008'> Congratulations!! You have successfully cleared this exam with 
					<b>C1 Grade</b>.</p>";
				} else if($marks >= 61 && $marks <= 70){
					echo "<p style='color:#00b008'> Congratulations!! You have successfully cleared this exam with 
					<b>B2 Grade</b>.</p>";
				} else if($marks >= 71 && $marks <= 80){
					echo "<p style='color:#00b008'> Congratulations!! You have successfully cleared this exam with 
					<b>B1 Grade</b>.</p>";
				} else if($marks >= 81 && $marks <= 90){
					echo "<p style='color:#00b008'> Congratulations!! You have successfully cleared this exam with 
					<b>A2 Grade</b>.</p>";
				} else if($marks >= 91){
					echo "<p style='color:#00b008'> Congratulations!! You have successfully cleared this exam with 
					<b>A1 Grade</b>.</p>";
				} else {
					echo "Please enter valid entry!";
				}


			?>
		</form>
	</fieldset>
</body>
</html>