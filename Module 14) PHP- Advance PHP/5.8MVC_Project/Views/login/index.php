<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <?php
// $StaticUrl = "http://localhost/16DecJatin/MVC/";
$RequestUriArray = explode('/',$_SERVER['REQUEST_URI']);
$DynamicUrl = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$RequestUriArray[1]."/".$RequestUriArray[2]."/Views/login/";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Grass login & Sign up Form a Flat Responsive Widget Template :: w3layouts </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Grass login & Sign up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
      <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
      <style type="text/css">
         input{
                width: 97%;
                color: #000000;
                outline: none;
                font-size: 14px;
                padding: .8em .7em;
                margin: 0px 0px 23px;
                border: none;
                display: inline-block;
                background: #fff;
                transition: all 0.5s ease-in-out;
                -webkit-transition: all 0.5s 
         }
      </style>
      <!-- Meta tags -->
      <!-- font-awesome icons -->
      <link href="<?php echo $DynamicUrl; ?>css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="<?php echo $DynamicUrl; ?>css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
   </head>
   <body>
      <h1 class="header-w3ls">
         Grass login & Sign up Form
      </h1>
      <h1 class="header-w3ls" style="float: right;margin-top: -160px;margin-right: 100px ">
         <a href="home" style="color: #ffffff73">
	         <i class="fa fa-home"></i>

         </a>
      </h1>
      <div class="art-bothside">
         <div class="sap_tabs">
            <div id="horizontalTab">
               <ul class="resp-tabs-list">
                  <li class="resp-tab-item"><span>Login</span></li>
                  <li class="resp-tab-item"><span>Sign Up</span></li>
               </ul>
               <div class="clearfix"> </div>
               <div class="resp-tabs-container">
                  <div class="tab-1 resp-tab-content">
                     <div class="swm-right-w3ls">
                        <form method="post">
                           <div class="main">
                              <div class="icon-head-wthree">
                                 <h2>Login Here</h2>
                              </div>
                              <div class="form-left-w3l">
                                 <input type="text" name="email" placeholder="Email" required="">
                              </div>
                              <div class="form-right-w3ls ">
                                 <input type="password" name="password" placeholder="Password" required="">
                              </div>
                              <div class="btnn">
                                 <button type="submit" name="Login">LogIn</button><br>
                                 <a href="#" class="for">Forgot password...?</a>  
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="tab-1 resp-tab-content">
                     <div class="swm-left-w3ls">
                        <form method="post">
                           <div class="main">
                              <div class="icon-head-wthree">
                                 <h2>Sing Up Here</h2>
                              </div>
                              <div class="form-left-to-w3l">
                                 <input type="text" name="name" placeholder="Name" required="">
                              </div>
                              <div class="form-left-w3l">
                                 <input type="email" name="email" placeholder="Email" required="">
                              </div>
                              <div class="form-right-w3ls ">
                                 <input type="password" name="password" placeholder="Password" required="">
                              </div>
                              <div class="btnn">
                                 <button type="submit" name="SignUp">Sign Up</button><br>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="social-icons">
         <ul>
            <li>
               <a href="#">
               <span class="fab fa-facebook-f"></span>
               </a>
            </li>
            <li>
               <a href="#">
               <span class="fab fa-google-plus-g"></span>
               </a>
            </li>
            <li>
               <a href="#">
               <span class="fab fa-twitter"></span>
               </a>
            </li>
         </ul>
      </div>
      <div class="copy">
         <p>&copy;2018 Grass login & Sign up Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
      </div>
      <!--js working-->
      <script src='<?php echo $DynamicUrl; ?>js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <script src="<?php echo $DynamicUrl; ?>js/easyResponsiveTabs.js"></script>
      <script>
         $(document).ready(function () {
         	$('#horizontalTab').easyResponsiveTabs({
         		type: 'default', //Types: default, vertical, accordion           
         		width: 'auto', //auto or any width like 600px
         		fit: true // 100% fit in a container
         	});
         });
      </script>
   </body>
</html>