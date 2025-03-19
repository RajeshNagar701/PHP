<?php
include 'include/subcategory_controller.php';
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
		
if(isset($res))
{
	$data["result"]=$res;
	$header=array("Order_id","Order_date","User_id","Product_id","total","Payment_status");
	$data["header"]=$header;
}
?>  
  <div class="content">
            <div class="container-fluid">
                <div class="row">
				<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sales Detail</h4>
                            </div>
                            <div class="content">
                                <form method="post">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Start Date</label>
													 <input type="date" class="form-control" id="date1" placeholder="Enter category" name="date1">                                          
											   
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input type="date" class="form-control" id="date2" placeholder="Enter category" name="date2">
                                            </div>
                                        </div>
                                        
                                    </div>
									
                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right" name="search">Search</button>
									
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
					 <?php if(isset($res)){ ?>
              <div class="row">
                  
                  <div class="col-lg-12"></div>
                  <div class="col-lg-12">
                      <section class="panel">
                       
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th> Order Id</th>
                                 <th> Order_date</th>
								  <th> User_id</th>
								    <th> Product_id</th>
									<th> Total</th>
									<th> Payment Status</th>
								
                               
                              </tr>
                             
                              
                               <?php
                                  foreach($res as $r)
								  {      			
                                 ?>

                                            <tr>
                                                <td><?php echo $r->order_id; ?></td>
                                                <td><?php echo $r->date; ?></td>
												<td><?php echo $r->user_id; ?></td>
												<td><?php echo $r->product_id; ?></td>
												<td><?php echo $r->total; ?></td>
												<td><?php echo $r->payment_status; ?></td>
                                            </tr>
                              <?php
								  }	
                              ?>
                           <tr>
						    <td colspan="2">
							<!--input type="submit" id="report" name="report" value="Generate PDF" class="btn btn-primary" onclick="return createPDF();"-->
						 <a href="#" class="btn btn-primary" onclick="return createPDF();">Generate PDF</a>
						 </td>
						 </tr>
                           </tbody>
                        </table>
						
                      </section>
                  </div>
              </div>
			  <?php } ?>
                    
                    
                </div>



                <div class="row">
                    
                   
            </div>
        </div>
		
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
