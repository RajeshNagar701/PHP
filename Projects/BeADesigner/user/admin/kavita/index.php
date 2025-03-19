<?php
	include 'include/login.php';
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Bespoke::Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-page">
  <h3>Admin Login</h3>
  <div class="form">
    <form class="register-form" method="post">
      <input type="email" placeholder=" Enter the Email"/>
      <input type="password" placeholder=" Enter the password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post">
      <input type="email" placeholder="Enter the Email" name="admin_name"/>
      <input type="password" placeholder="Enter the password" name="password"/>
	 
	  <br/>
      <button type="submit" name="login">login</button>
      <p class="message">Forgot Password? <a href="forgot_password.php">Click Here</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
