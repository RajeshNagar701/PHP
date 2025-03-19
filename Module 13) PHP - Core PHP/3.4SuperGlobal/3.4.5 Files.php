<!--Example of File Global variable -->
<?php

echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);

?>

<form method="post" enctype="multipart/form-data">
	<input type="file" name="ProfilePicture">
	<input type="text" name="USerName">
	<input type="submit" name="Upload">
</form>
