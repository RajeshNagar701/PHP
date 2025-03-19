<?php
	include('include/product_controller.php');
?>       
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
	
	


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
   <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<script src="ajax_js/jquery.js" type="text/javascript"></script>
<script>
function getCat(val)
{
	//alert("hi");	
	$.ajax({
		
		type:'POST',
		url:'include/product_controller.php',
		data:'category_id='+val,
		success:function(data)
		{
			//alert(data);
			$("#subcat").html(data);	
		}
		
	});
	
}

</script>


</head>
<body>

<div class="wrapper">
   <?php
		include('sidebar.php');
	?>
    <div class="main-panel">
		<?php 
			include('header.php');
		?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
				<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Product</h4>
                            </div>
                            <div class="content">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
											<div class="form-group">
                                                <label>Category name</label>
													<select name="category" class="form-control" name="cat" id="cat" onChange="getCat(this.value)">
													<option value="">Select</option>
													<?php
														foreach($category as $c)
														{
															if($subcat->category_id==$c->category_id)
															{ 
													?>
													<option value="<?php echo $c->category_id;?>" selected="selected"><?php echo $c->category_name;?></option>
													<?php
														}
															else
															{
																?>
															<option value="<?php echo $c->category_id;?>"><?php echo $c->category_name;?></option>
																
															<?php
															}
														}
															
													?>
													</select>                                           
											   
														
																	</select>                                           
											   
                                            </div>

                                            <div class="form-group">
                                                <label> Sub Category name</label>
													<select name="subcategory" class="form-control" name="subcat" id="subcat">
													<option value="">Select</option>
													
													</select>                                           
											   
                                            </div>
											<div class="form-group">
                                                <label>Product name</label>
													<input type="text" class="form-control" placeholder="Enter the sub category name" name="product" value="">
                                            </div>
											<div class="form-group">
                                                <label>Image</label>
                                              <input type="file" class="form-control" id="exampleInputFile" name="image">
                                            </div>
											<div class="form-group">
												 <label>Discription</label>
                                               <textarea class="form-control " id="ccomment" name="desc" required></textarea>
                                            </div>   
											<div class="form-group">
                                                <label>Price</label>
                                                <input type="number_format" class="form-control" placeholder="Enter the price" name="price" value="">
                                            </div>
											<div class="form-group">
                                                <label>Colour</label>
                                                <input type="text" class="form-control" placeholder="Enter the colour" name="colour" value="">
                                            </div>
											
											<div class="form-group">
                                                <label>Size</label>
                                                <input type="number_format" class="form-control" placeholder="Enter the price" name="size" value="">
                                            </div>
											<div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number_format" class="form-control" placeholder="Enter the price" name="qty" value="">
                                            </div>
											<div class="form-group">
                                                <label>Show On Index Page</label>
                                                <input type="Checkbox" class="form-control" name="index" value="">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    
									
                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="addproduct">Add Product</button>
									
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    
                    
                </div>



                <div class="row">
                    
                   
            </div>
        </div>
		
        <?php
			include('footer.php');
		?>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
