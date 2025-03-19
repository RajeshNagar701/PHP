<?php
	include("include/product_controller.php");
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
<?php
	include("header.php");
?>
	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Order Form</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Order<span> Form</span></h3>
			<p> </p>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Fill Your Address Details  </h4>
			</div>
			<div class="login-body">
				<form class="wow fadeInUp animated" method="post" data-wow-delay=".7s" id="myform">
					<input type="text" placeholder="Name" name="name" data-bvalidator=" alpha,required" id="fname">
					<input type="text" class="email" placeholder="Email Address" name="email" data-bvalidator="email,required" id="email">
					<input type="radio" placeholder="male" value="Male" name="gender" >Male
					<input type="radio" placeholder="" value="female" name="gender" data-bvalidator="required" data-bvalidator-msg="Select one radio button">Female<br/><br/>
					<input type="radio" placeholder="male" value="Myself" name="gift" >Myself
					<input type="radio" placeholder="" value="Friend" name="gift" data-bvalidator="required" data-bvalidator-msg="Select one radio button">Gift to Friend<br/><br/>
					<input type="date" placeholder="Gift Date" name="dog" data-bvalidator="required"><br/><br/>
					<input type="text" name="address" placeholder="Enter the Address" data-bvalidator="required" id="add">
					<input type="text" placeholder="Enter the contact no"  name="contact" data-bvalidator="minlength[10],required">
					<img src="designed_product/img.png" height="150" width="150" >
					<input type="hidden" name="photo" id="photo" value="img.png">
					<input type="text" name="price" id="price" readonly="readonly" value=<?php session_start(); echo $_SESSION['cust_price'];?>RS>
					
					<input type="submit" name="order" value="Click Here To Save Your Shipping Details And Payment"><br/>
				
				<form action="<?php echo $paypal_url; ?>" method="post">				
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
       
        <input type="hidden" name="amount" value="<?php echo $_SESSION['cust_price'];?>">
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
		</div>
	</div>
	<!--//login-->
	<!--footer-->
	<?php
		include("footer.php");
	?>