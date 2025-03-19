<?php
include 'include/signup_controller.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Home :: Bespoke</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--//Custom Theme files -->
<!--js-->
<link href="bvalidator.css" type="text/css" rel="stylesheet"/>

<script src="jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="jquery.bvalidator.js" type="text/javascript"></script>
<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#myform').bValidator();
    });
</script> 
<!--//js-->

<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->

<script language="javascript">
function getsubcat(val)
{
	
	$.ajax({
		type:"POST",
		url:"include/product_controller.php",
		data:'asub_cat='+val,
		success: function(data){
		//	alert(data);
			
		$('.multi-column-dropdown').html(data);			
			}
		});
}
</script>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<p>Welcome to Guest <a href="register.php">Register </a> Or <a href="signin.php">Sign In </a></p>
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.php">Bespoke <b>design</b><span class="tag">Everything for Gift world </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="cart.php">
								<span class="simpleCart_total">Your Cart</span>  
						</a></h4>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
					
					<!--//navbar-header-->
				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Register<span> Form</span></h3>
			<p> </p>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Already have an Account ?<a href="signin.php">  Sign In »</a> </h4>
			</div>
			<div class="login-body">
				<form class="wow fadeInUp animated" method="post" data-wow-delay=".7s" id="myform">
					<input type="text" class="email" placeholder="Email Address" name="email" data-bvalidator="email,required" id="email">
					<input type="password" name="pass" class="lock" placeholder="Password" data-bvalidator="required" id="password">
					<input type="text" placeholder="First Name" name="fname" data-bvalidator=" alpha,required" id="fname">
					<input type="text" placeholder="Last Name" name="lname" data-bvalidator=" alpha,required" id="lname">
					<input type="radio" placeholder="male" value="Male" name="gender" >Male
					<input type="radio" placeholder="" value="female" name="gender" data-bvalidator="required" data-bvalidator-msg="Select one radio button">Female<br/><br/>
					 <input type="date" placeholder="Date of Birth" value="" name="dob" data-bvalidator="required"><br/><br/>
					 <input type="text" name="add" value="" placeholder="Enter the Address" data-bvalidator="required" id="add">
					  <input type="text" placeholder="Enter the contact no" value="" name="contact" data-bvalidator="minlength[10],required">


					
					
					<input type="submit" name="Register" value="Register">
				</form>
			</div>
		</div>
	</div>
	<!--//login-->
	<!--footer-->
	<?php
		include("footer.php");
	?>