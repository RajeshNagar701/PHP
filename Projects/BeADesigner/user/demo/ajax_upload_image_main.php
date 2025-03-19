<html>
<head>
<title>Ajax Image Upload Using PHP and jQuery</title>
<link rel="stylesheet" href="style.css" />
<script src="jquery.min.js"></script>
<script src="script.js"></script>
</head>
<body>
<?php 
if(isset($_REQUEST['image']))
{
	$img=$_REQUEST['image'];
}

?>
<div class="main">
<img src="<?php echo $img; ?>"></img>
<div id="selectImage">

<input type="file" name="file" id="file"  required />
</div>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<div id="image_preview"><img id="previewing" src="DEFAULT.png"/></div>


</form>
</div>
<h4 id='loading' >loading..</h4>
<div id="message"></div>
</body>
</html>