<?php
	include("include/report_controller.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title></title>

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
                                <h4 class="title">Customer details</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Email_id</th>
										<th>Password</th>
										<th>First name</th>
										<th>Last name</th>
										<th>Gender</th>
										<th>DOB</th>
										<th>Address</th>
                                    	<th>Contact_no</th>
                                    	<th>Status</th>
                                    	
                                    </thead>
									<?php
										foreach($customer as $c)
										{
									?>
                                    <tbody>
                                        <tr>
                                        	<td><?php echo $c->customer_id;?></td>
                                        	<td><?php echo $c->email_id;?></td>
											<td><?php echo $c->password;?></td>
											<td><?php echo $c->f_name;?></td>
											<td><?php echo $c->l_name;?></td>
											<td><?php echo $c->gender;?></td>
											<td><?php echo $c->dob;?></td>
											<td><?php echo $c->address;?></td>
											<td><?php echo $c->contact_no;?></td>
											<td><a href="include/report_controller.php?sid=<?php echo $c->customer_id; ?>&st=<?php echo $c->status; ?>"><?php echo $c->status;?></a></td>     
                                        	
                                        	
                                        	
                                        </tr>
                                                                              
                                    </tbody>
									<?php
										}
									?>
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
