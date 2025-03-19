<?php
	include("include/product_controller.php");
?>
<?php
	include("header.php");
?>
	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--products-->
	<div class="products">	 
		<div class="container">
			<div class="col-md-11 product-model-sec">
			<?php
					foreach($rr as $p)
					{
						
				?>
				<div class="product-grids simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="#"><img src="image/<?php echo $p->image;?>" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a href="single.php?pid=<?php echo $p->product_id;?>">Quick View </a></li>
								
								<li><a class="item_add" href="cart.php?product=<?php echo $p->product_id;?>">Add to cart</a></li>
							</ul>
						</div>
						
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.php"><?php echo $p->product_name ;?> </a></h5>
						
						
						<div class="ofr">
							
							<p><span class="item_price"><?php echo $p->price;?></span></p>
						</div>
					</div>
				</div>
				<?php
		
					}
				?>
				

				
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//products-->
	<?php
		include("footer.php");
	?>