<?php
	session_start();

if(!isset($_SESSION['name']))
{
	header("location:index.php");

}
?>
<div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">

    <!--

	
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Bespoke Design
					
                </a>
            </div>

            <ul class="nav">
                
                
                <li>
                    <a href="view category.php">
                        <i class="pe-7s-note2"></i>
                        <p>Manage Category</p>
							
                    </a>
                </li>
                <li>
                    <a href="view subcategory.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Manage Subcategory</p>
                    </a>
                </li>
               
				<li>
                    <a href="view_product.php">
                        <i class="pe-7s-gift"></i>
                        <p>Manage Product</p>
                    </a>
                </li>
				<li>
                    <a href="view_custom_product.php">
                        <i class="pe-7s-display2"></i>
                        <p>Manage Design</p>
                    </a>
                </li>
				<li class="active">
                    <a href="view_state.php">
                        <i class="pe-7s-albums"></i>
                        <p>Manage State</p>
                    </a>
                </li>
				<li class="active">
                    <a href="view_city.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Manage city</p>
                    </a>
                </li>
				<li class="active">
                    <a href="view_area.php">
                        <i class="pe-7s-culture"></i>
                        <p>Manage Area</p>
                    </a>
                </li>
                <li>
				
                    <a href="manage order.php">
                        <i class="pe-7s-cart"></i>
                        <p>Manage Order</p>
                    </a>
                </li>
                
				<li>
                    <a href="manage payment.php">
                        <i class="pe-7s-wallet"></i>
                        <p>Manage Payment</p>
                    </a>
                </li>
				
				

				
				
            </ul>
    	</div>
    </div>
