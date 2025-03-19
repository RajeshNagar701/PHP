<?php 
include_once('Connection.php');


if (isset($_REQUEST['Login'])) {
	// echo "<pre>";
	// print_r($_REQUEST);
	$uname = $_REQUEST['UserName'];
	$pass = $_REQUEST['Password'];
	$LoginSQL = "SELECT * FROM users WHERE password='$pass' AND username='$uname'";
	$LoginSQLEx = $ConnectionData->query($LoginSQL);
	
		//echo "hii";
		 // echo "<pre>";
		 // print_r($LoginSQL);
		 // echo "<pre>";
		 // print_r($LoginSQLEx);
		 // exit;
		

	if ($LoginSQLEx->num_rows > 0 ) {
		$UserData = $LoginSQLEx->fetch_object();
		$_SESSION['UserData'] = $UserData;
		
		// echo "hello";
		// echo "<pre>";
		// print_r($UserData);
		// exit;

		if ($UserData->role_id == 1) { 
		?>
			<script type="text/javascript">
				alert("Hello admin");
				window.location.href="adminHome.php";
			</script>
		<?php 			
		}elseif($UserData->role_id == 2){

		?>
		<script type="text/javascript">
			alert("Hello User");
			window.location.href="home.php";
		</script>
	<?php 
		}
	}else{ ?>
		<script type="text/javascript">
			alert("Invalid Login Credencial");
		</script>
	<?php 
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
	<div class="row">
		<form method="post">
		
			
		<div class="col-md-5 col-md-offset-4">
			<div class="panel" style="background-color:#c3c3c3">		
				<div class="panel panel-heading" style="background-color: #94918c;">
					Login
				</div>
				<div class="panel panel-body" style="background-color:#c3c3c3">
					<div class="row form-group">
						<div class="col-md-12">
							<input type="text" placeholder="User Name" class="form-control" name="UserName">	
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="Password" placeholder="Password" class="form-control" name="Password">	
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" class="btn btn-success" name="Login" value="Login">	
							<input type="cancel" class="btn btn-danger" value="Reset">	
							<br>
							<br>
							<center>
								<a style="color: #fff" href="registration.php">Click here for Registration</a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>	
</div>


</body>
</html>