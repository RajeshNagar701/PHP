<?php
//include ('include/single_controller.php');
?>
	<!--new-->
	<div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">New <span>Arrivals</span></h3>
				<p> </p>
			</div>
			<div class="new-info">
				<?php
					foreach($prod as $c)
					{
						
				?>
				<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="single.php"><img src="image/<?php echo $c->image;?>" height="250" width="230" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href="cart.php?product=<?php echo $c->product_id;?>">Add to cart</a></li>
								<li><a href="single.php?pid=<?php echo $c->product_id;?>">Quick View </a></li>
								<li><a href="products.php?pid=<?php echo $c->sub_category_id;?>">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.php"><?php echo $c->product_name ;?></a></h5>
						
						<div class="ofr">
							<p class="pric1">Price:<del></del></p>
							<p><span class="item_price"><?php echo $c->price;?></span></p>
						</div>
					</div>
				</div>
				
				<?php
		
					}
				?>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>		
	<!--//new-->