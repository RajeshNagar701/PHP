<?php 
include 'include/payment_controller.php'; 

?>
<!DOCTYPE html>
<html>
<head>
<title>Bespoke :: Cart</title>
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
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->

<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--close-button-->
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.cart-header').fadeOut('slow', function(c){
	  		$('.cart-header').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.cart-header1').fadeOut('slow', function(c){
	  		$('.cart-header1').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.cart-header2').fadeOut('slow', function(c){
	  		$('.cart-header2').remove();
		});
	});	  
});
</script>
<!--//close-button-->
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

</head>
<body>
	<!--header-->
	<?php include 'header.php'; ?>
	

	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Payment Success</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--cart-items-->
	<div class="cart-items">
		<div class="container">
	
		<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Thank You <?php echo $_SESSION['user']; ?> For Payment</h3>
			<p>Your Payment has been successfully done.</p>
			<h3><a href="include/payment_controller.php?payment='done'">Go Back To Home</a></h3>
		</div>
		<!--iv class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Here is your order summery ! </h4>
			</div>
			
		</div-->
		<div class="login-page-bottom">
			<h5> - Please write your valuable review on our Facebook and Twitter page -</h5>
			<div class="social-btn"><a href="https://www.facebook.com"><i>Sign In with Facebook</i></a></div>
			<div class="social-btn sb-two"><a href="https://www.twitter.com"><i>Sign In with Twitter</i></a></div>
		</div>
	</div>
			
		</div>
	</div>
	<!--//cart-items-->	
	<!--footer-->
	<?php include 'footer.php'; ?>
	
	
	