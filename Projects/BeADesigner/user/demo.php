<?php
include("include/design_controller.php");

session_start();

if(!isset($_SESSION['user']))
{
	$msg="Please Do Registeration and Login to Get Order ";
	header("location:signin.php?msg=$msg");
}
?>
<?php
	include("header.php");
?>

<!--dynamic image-->
<link rel="stylesheet" href="demo/style.css" />
<script src="demo/jquery.min.js"></script>
<script src="demo/script.js"></script>
<!--end here-->

<!--image capture-->

<script type="text/javascript" src="demo2/js/html2canvas.js"></script>
<script type="text/javascript" src="demo2/js/jquery.plugin.html2canvas.js"></script>
<script type="text/javascript">
	function capture() {
		$('.ss').html2canvas({
			onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
				$('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
				document.getElementById("myForm").submit();
			}
		});
	}
</script>
<!--end here-->


	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Customize Your Gift</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--products-->
	<div class="products">	 
		<div class="container">
			<div class="col-md-12 product-model-sec">
			<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1 style="font-size: 3em;
    margin: -1.4em 409px 0.5em;
    font-weight: 900;"><a href="#">Design Your Gift </a></h1>
			</div>
			<?php 
			if(isset($_REQUEST['image']))
			{
				$img=$_REQUEST['image'];
				$price=$_REQUEST['price'];
				session_start();
				$_SESSION['cust_price']=$price;
			}

			?>
			<div class="main">
			
				<div class="ss">
					<img src="<?php echo $img; ?>"></img>			
					<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
						<div id="image_preview"><img id="previewing" src="demo/a.png"/></div>
					</form>
				</div>
					<div id="selectImage">
						<input type="file" name="file" id="file"  required />
					</div>
				
				
				
			</div>
					<form method="POST" enctype="multipart/form-data" action="demo2/save.php" id="myForm">
					<input type="hidden" name="img_val" id="img_val" value="" />
					
					</form>
					<a href="#" onclick="capture();" class="btn btn-success"> Please Click Here To Order Your Product</a>
			</div>

				
			</div>
	
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//products-->
	