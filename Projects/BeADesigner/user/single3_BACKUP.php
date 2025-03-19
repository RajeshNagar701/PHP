<?php
include ('include/design_controller.php');
?>
<!DOCTYPE html>
<html>

<head>

<title></title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
  
  <style>
  #draggable { width: 150px; height: 150px; padding: 0.5em;}
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
    <script>
        $(document).ready(function () {

            $("#txt1").keydown(function () {

                $("#lbl1").html($("#txt1").val());
            });


            $("#txt2").keydown(function () {

                $("#lbl2").html($("#txt2").val());
            });
			
			$('#imageFile').change(function(){
				
				$("#lbl6").html($("#imageFile").val());
			});
            $("#lbl1").draggable();
            $("#lbl2").draggable();
            $("#img1").resizable();
			$("#img1").draggable();
        });
    </script>
	
	
	<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">

 function getimage(val)
 {
	 alert(val);
	 $.ajax({
		 type: "GET",
		 url: "second.php",
		 data: 'image='+val,
		 success: function(data)
		{
			$("#state").html(data);
		}
	});
  }
  </script>
	
    <style>
        #lbl1 {
            position: absolute;
            margin-top: 17%;
            margin-left: -70px;
            background-color:transparent;
        }

         #img1 {
            position: absolute;
            margin-top: 19%;
            margin-left: -40px;
            width:100px;
            height:100px;
        }
          #lbl2 {
            position: absolute;
            margin-top: 28%;
            margin-left: -70px; background-color:transparent;
        }
		.xyz{
			background-color:#f00;
			
			
		}
		
    </style>
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->

<!--web-fonts-->
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

</head>
<body>

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
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//header-->

	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single page</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--single-page-->
	<div class="single">
		<div class="container">
			<form id="form1">
        <div style="width: 99%; height: 640px;">

            <div id="div1" class="login-body" style="width: 30%; height: 498px; float: left;">
                Enter Top Side Text :<br />
                <br />
                <input type="text" id="txt1"  />
                <br />
                <br />
                <br />
                Upload Image :<br />
                <br />
                <input type="file"  ID="imageFile" name="imageFile" Height="28px" Width="237px" onchange="uploadFile()" />
                <br />
                <br />
                <input type="button" class="active" ID="Button1" name="Button1" value="Upload image"/>
                <br />
                <br />
                Enter bottom Side Text :<br />
                <br />
                <input type="text" id="txt2" />
                <br />
                <br />
				<?php 
				if(isset($_REQUEST['image']))
				{
						$i=$_REQUEST['image'];
				}					?>
                <img ID="Image1" name="image" Height="207px" Width="205px" src="<?php echo $i;?>"/>
            </div>

            <div id="div2" style="width: 49%; height: 280px; float: left;">
                <center style="height: 500px">
                    
                    
                    <div style="width:600px; height:600px; background-image:url('<?php echo $i;?>'); background-repeat:no-repeat;">
                        
                        <span id="lbl1">

						</span>
						<span id="lbl6">

						</span>
                       <img ID="img1" class="xyz" src=""/>
					   <div style="background-color:pink; margin-top:200px;    overflow: hidden;
    position: absolute;">
					   </div>
					   
                        <span id="lbl2"/>
						</span>
						
						
                    </div>
                   
</center>
            </div>

        </div>
    </form>

			   <div class="clearfix"> </div>
			</div>
			
	
	<!--//single-page-->
	<!--footer-->
	<?php include 'footer.php'; ?>
</body>
</html>