<?php 
error_reporting(0);
session_start();	
//include_once('inc/menu_controller.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Home :: Bespoke</title>
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">

 function getSecond(val)
 {
	 //alert(val);
	 $.ajax({
		 type: "GET",
		 url: "second.php",
		 data: 'image='+val,
		 success: function(data)
		{
			//$("#state").html(data);
		}
	});
  }			
  </script>
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
<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
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
<script language="javascript">
function emptycart()
{
	//alert(val);
	$.ajax({
		type:"POST",
		url:"include/cart_controller.php",
		data:'empty=empty',
		success: function(data){
			//alert(data);	
		//$('#my_cart').html(data);			
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
					<?php if(!isset($_SESSION['user'])){ ?>
					<p>Welcome to Bespoke Design
					<a href="register.php">Register </a> Or <a href="signin.php">Sign In </a></p>
					<?php } else { ?>
						<p>Welcome <a href="#"><?php echo $_SESSION['user']; ?></a>  to Bespoke Design
					<a href="logout.php">Logout </a>                                            <a href="returnproduct.php?rid=<?php echo $_SESSION['id']; ?> ">Return Product </a></p>
					<div>
						
					</div>
					<?php } ?>
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
						<a href="contact.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="cart.php">
								<span class="simpleCart_total">Your Cart</span> 
						</a></h4>
						<div class="cart-box">
							<p><a href="" class="simpleCart_empty" onClick="emptycart();">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
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
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="index.php" class="active">Home</a></li>
							<?php
							foreach($category as $mc)
							{
							?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"  onClick="getsubcat(<?php echo $mc->category_id;?>)"><?php echo $mc->category_name ?><b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									<div class="row">
										<div class="col-sm-3 menu-grids menulist1">
											<ul class="multi-column-dropdown">												
											</ul>
											
										</div>																		
									
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<?php
							}
							?>
											
							
							<li><a href="design_products.php">Customize Gifts</a></li>
						</ul> 
						<div class="clearfix"> </div>
						<!--//navbar-collapse-->
						<header class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
						</header>
					</div>
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