<?php
	include("include/cart_controller.php");
	include("header.php");
	session_start();
	
?>
<?php
if(isset($_REQUEST['add']))
{
	$add=$_REQUEST['address'];
	$date=$_REQUEST['date'];
	//$prod_id= $_REQUEST["product"];
	//echo $add;
	//echo $date;
	//exit;
}
?>


	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Order Information</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--Short codes-->
	<div class="codes">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Order<span> Information</span></h3>
				<p> </p>
			</div>
				
			
			
			
			
			<div class="page-header wow fadeInDown animated" data-wow-delay=".5s">
				<h3 class="hdg">Order details</h3>
			</div>
			
			<hr class="bs-docs-separator wow fadeInDown animated" data-wow-delay=".5s">

			<div class="bs-docs-example wow fadeInDown animated" data-wow-delay=".5s">
				<table class="table table-striped">
				
					<thead>
						<tr>
							<th>Shipping Address</th>
							<th>Shipping Date</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Shipping Charges</th>
							<th>Shipping Status</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
						<?php
							
							//$name=$_SESSION["cart"][$prod_id]["product_name"];
						?>
							<td><?php  echo $add;?></td>
							<td><?php echo $date;?></td>
							<td><?php echo $cart["product_name"];?></td>
							<td><?php echo $cart["quantity"];?></td>
							<td><?php echo $cart["price"];?></td>
							<td>Otto</td>
							<td>Pending</td>
						</tr>
						
					</tbody>
				
				</table>
				
			</div>
			
		</div>
	</div>
	<!--//short-codes-->	
	<?php
		include("footer.php");
	?>
	<!--//footer-->			
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>