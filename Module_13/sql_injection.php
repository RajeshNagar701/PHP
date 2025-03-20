<!DOCTYPE html>
<html>
    <head>
        <title>LearnVern | SQL Injection</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
    	<?php

		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'db_connect';
		//error_reporting(0);
		mysqli_report(MYSQLI_REPORT_STRICT);
		try{
			$con = new mysqli($servername, $username, $password, $database);
			//echo "Connection Successful.";
		} catch(Exception $ex){
			echo "Connection Failed: " . $ex->getMessage();
            exit;
		}

		if(isset($_POST['login'])){
			$email = $_POST['email'];
			$pass = mysqli_real_escape_string($con,$_POST['pass']);

			echo $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
			$exec = $con->query($sql);
			if($exec->num_rows > 0){
				$name = $exec->fetch_object()->fname;
				echo '<div class="alert alert-success" role="alert">
		  					Welcome: '. $name. '
					   </div>';
			} else {
				echo '<div class="alert alert-danger" role="alert">
		  					Username or password is wrong.
					   </div>';
				header("Refresh:5; url=demo.php");
			}
		}
		?>
        <div class="album py-5 bg-light" style="height:100vh;">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card border-success" style="max-width: 25rem;padding: 2%;">
                    <h2> Login </h2> <hr>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="login_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="login_email" name="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="login_password" class="form-label">Password</label>
                                <input type="text" class="form-control" id="login_password" name="pass" placeholder="password">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="login" id="login" value="Login" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    </body>
</html>
