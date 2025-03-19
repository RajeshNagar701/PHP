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
  <h3>Admin Forgot Password</h3>
  <div class="form">
  
    <form class="login-form" method="post">
      <input type="email" placeholder="Enter the Email" name="admin_name"/>
    
	  <br/>
      <button type="submit" name="login">Send Recovery Email</button>
      
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
