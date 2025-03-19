<?php
include 'include/order_controller.php';
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
                    
                    
                </div>



                <div class="row">
                    
                   
            </div>
        </div>
		<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Order Details</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Date</th>
										<th>User_id</th>
										<th>Products</th>
										<th>total</th>
										<!--<th>Shipping charges</th>
									    <th>Shipping Address</th>
										<th>Shipping Type</th>
										<th>Shipping Date</th>
										<th>Shipping Status</th>-->
										<th>Payment Status</th>
										
                                    	
                                    	<th>Delete</th>
                                    	
                                    </thead>
                                    <tbody>
									<?php
										foreach($order as $o)
										{
									?>
                                        <tr>
                                        	<td><?php echo $o->order_id;?></td>
                                        	<td><?php echo $o->date;?></td>
											<td><?php echo $o->user_id;?></td>
											<td><?php echo $o->products;?></td>
											<td><?php echo $o->total;?></td>
											<!--<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>-->
											<td><?php echo $o->payment_status;?></td>
											
                                        	<td><a href ="manage order.php?did=<?php echo $o->order_id;?>">Delete</a></td>
                                        	
                                        	
                                        </tr>
									<?php
										}
									?>
                                    </tbody>
                                </table>

                            </div>
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
