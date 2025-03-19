<?php
//include 'include/category_controller.php';
//print_r($category);
//exit;
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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link href="validation/bvalidator.css" type="text/css" rel="stylesheet"/>

<script src="validation/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="validation/jquery.bvalidator.js" type="text/javascript"></script>

<script type="text/javascript"> 
    jQuery(document).ready(function ($) {
	
        jQuery('#myform').bValidator();
    });
</script> 
<!--//js-->
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
				<div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add category</h4>
                            </div>
                            <div class="content">
                                <form method="post" id="myform">
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Category name</label>
                                                <input type="text" data-bvalidator="required"  class="form-control" placeholder="Add category"  name="cat" value="">
                                            </div>
                                        </div>
                                        
                                    </div>

                                   
									
                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="category">Add category</button>

									
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

   
	
	

</html>
