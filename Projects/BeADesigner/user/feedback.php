
<?php
	include("include/feedback_controller.php");
	include("header.php");
?>
	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Contact Us</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--contact-->
	<div class="contact">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Feed<span>back</span></h3>
			
	<div class="address"><!--address-->
		<div class="container">
			<div class="address-row">
				<div class="col-md-6 address-left wow fadeInLeft animated" align="center" data-wow-delay=".5s">
					<div class="address-grid" align="center">
						<h4 class="wow fadeIndown animated" data-wow-delay=".5s">Give Your Feedback </h4>
						<form method="post" align="center">
							
							
							
							<textarea class="wow fadeIndown animated" data-wow-delay=".8s" placeholder="Give your feedback" name="feedback" required=""></textarea>
							<input class="wow fadeIndown animated" data-wow-delay=".9s" type="submit" name="send" value="SEND">
						</form>
					</div>
				</div>
				
			</div>	
		</div>	
	</div>
	<!--//contact-->	
	<?php
		include("footer.php");
	?>