<?php 
include 'include/cart_controller.php'; 
error_reporting (0);
session_start();

if(!isset($_SESSION['user']))
{
	$msg="Please Do Registeration and Login to Get Order ";
	header("location:signin.php?msg=$msg");
}
//Set useful variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_id = 'rinkalkadia@gmail.com'; //Business Email

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
<script language="javascript">
function removecart(val)
{
	//alert(val);
	$.ajax({
		type:"POST",
		url:"include/cart_controller.php",
		data:'remove_cartid='+val,
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
	<?php include 'header.php'; ?>
	

	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Cart</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--cart-items-->
	<div class="cart-items">
		<div class="container">
		<?php 
			//session_start();
			if(isset($_SESSION['cart'])){
			$cnt=count($_SESSION["cart"]);
			if($cnt>0)
			{
			?>
			<h3 class="wow fadeInUp animated" data-wow-delay=".5s">My Shopping Cart(<?php echo $cnt; ?>)</h3>
			
			 <?php
                   $total=0;
				   
					
                  foreach($_SESSION["cart"]  as $cart)
                  {
                      $p= $cart["price"];
					 
					  $total=$total+$cart['price'];
                      $q=$cart["quantity"];
					 
					 
                      ?>
			<form action="" method="POST">
				

			<div class="cart-header wow fadeInUp animated" data-wow-delay=".5s">
				<div class="alert-close"> <a href="cart.php?remove_cartid=<?php echo $cart["product_id"]?>" class="btn btn-danger">Remove</a> </div>
				
				<!--div class="alert-close" onclick="removecart(<?php echo $cart["product_id"]; ?>);"> </div-->
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						<a href="single.php"><img src="image/<?php echo $cart["image"];?>" class="img-responsive" alt=""></a>
					</div>
					<div class="cart-item-info">
						<h4><a href="single.php?product=<?php echo $cart["product_id"];?>"> <?php echo $cart["product_name"];?> </a>
						</h4>
						<ul class="qty">
							<li><p>Price :<?php echo $p*$q;?></p></li>
							<!--<li><p>Quantity : <?php echo $q;?></p></li>-->
							<div class="quantity">
						<p class="qty"> Qty :  </p> <input type="number" min="1"  value="<?php echo $q;?>" name="cart['q'][<?php echo $cart["product_id"];?>]">
					</div>
						</ul>
						<div class="delivery">
							<button type='submit' name='updatecart' class="btn btn-info" value="update"> <i class="glyphicon glyphicon-edit icon-white"></i>Update Cart</button>
							<span>Delivered in 4-7 Business working days</span>
							<div class="clearfix"></div>
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</form>
			<?php 
				  }?>
				   <div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s" style="">
					<h4><a href="#">Grand Total : <b>&#8377; <?php echo $p*$q;?>.00</b> </a><br/><br/>
					<a href="checkout.php">Click Here To Checkout Now... <b></b> </a></h4>
					
				
<form action="<?php echo $paypal_url; ?>" method="post">				
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
       
        <input type="hidden" name="amount" value="<?php echo $total;?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/user/cancel.php'>
		<input type='hidden' name='return' value='http://localhost/user/success.php'>

        
        <!-- Display the payment button. -->
       <br/> <input type="image" name="submit" border="0"
        src="image/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="image/pixel.gif" >
    
    </form>
				</div>
			
				
			<?php
			} 
			}
			else
			{
			
			?>
			<div class="cart-header wow fadeInUp animated" data-wow-delay=".5s">
				<div class="alert-close"> </div>
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc" id="my_cart">
						<h4> Your Cart is Empty.</h4>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<?php }?>
			
			
		</div>
	</div>
	<!--//cart-items-->	
	<!--footer-->
	<?php include 'footer.php'; ?>fupdate
	
	
	
	
	