<?php
include('connection.php');
session_start();
if(!isset($_SESSION['login']))
{
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Be A Designer</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                               <?php
                               echo $_SESSION['login'];
                               ?>
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard "></i>Home   </a>
                    </li>
                    <li>
                        <a href="viewuser.php"><i class="fa fa-desktop "></i>Manage User <span class="fa arrow"></span></a>
                        
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Product <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="addproduct.php"><i class="fa fa-coffee"></i>Addproduct</a>
                            </li>
                            <li>
                                <a href="viewproduct.php"><i class="fa fa-flash "></i>View Product</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                    
                     <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Category <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="addcategory.php"><i class="fa fa-desktop "></i>Add Category</a>
                            </li>
                             <li>
                                <a href="viewcategroy.php"><i class="fa fa-code "></i>View Category</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Manage Order <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="vieworder.php"><i class="fa fa-bicycle "></i>View Order</a>
                            </li>
                             <li>
                                <a href="viewca"><i class="fa fa-flask "></i>View Cart</a>
                            </li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                   
                    <li>
                            <?php
                            if(isset($_SESSION['login']))
                            {
                            ?>

                        <a href="logout.php" style="color: white"><i class="fa fa-square-o "></i>    
                        Logout</a>
                            <?php
                            }
                            else
                            {

                    ?>  

                        <a href="index.php"><i class="fa fa-square-o "></i>Login</a>
                    <?php
                            }
                            ?>
                        </a>
                    </li>
                </ul>

            </div>

        </nav>