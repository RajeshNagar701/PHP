<?php
// $StaticUrl = "http://localhost/16DecJatin/MVC/";
$RequestUriArray = explode('/',$_SERVER['REQUEST_URI']);
$DynamicUrl = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$RequestUriArray[1]."/".$RequestUriArray[2]."/assets/";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Horse Crew Sports Category Bootstrap Responsive Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Horse Crew Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="<?php echo $DynamicUrl; ?>/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?php echo $DynamicUrl; ?>css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="<?php echo $DynamicUrl; ?>css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <!-- <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet"> -->
    <!-- //Fonts -->

</head>

<body>
    <!-- header -->

    <!-- header 2 -->
    <!-- navigation -->
    <div class="main-top" id="home">
        <header class="w3ls-top-sec">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <h1 class="logo-w3pvt float-lg-left col-lg-3 text-center">
                        <a class="navbar-brand" href="index.html">
                            <img src="images/logo.png" alt="" class="img-fluid logo-img">Horse Crew
                        </a>
                    </h1>
                    <!-- //logo -->
                    <!-- nav -->
                    <div class="nav_w3pvt mx-lg-auto col-lg-6 text-center">

                        <nav>
                            <label for="drop" class="toggle">Menu</label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu mx-lg-auto align-items-center" style="margin-top: 2.3em;">
                                <li class="active"><a href="index.html" class="active">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down" aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="#services" class="drop-text">Services</a></li>
                                        <li><a href="#process" class="drop-text">Proces</a></li>
                                        <li><a href="#blog" class="drop-text">Blog</a></li>
                                        <li><a href="#test" class="drop-text">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row website-mini-w3pvt" style="    float: right;
    position: absolute;
    margin-left: 1050px;
    margin-top: 15px">
                            <ul class="menu " style="margin: 0px 75px 0px 0px; ">
                                <?php
                                // echo "<pre>";
                                // print_r($_SESSION['UserData']->username);
                                if (isset($_SESSION['UserData'])) { 
                                    echo "Hello, ".$_SESSION['UserData']->username;
                                    ?> 
                                    <li class="" style="list-style: none">
                                        <a style="color: #555555;" href="logout" class="active">Logout</a>
                                    </li>
                                <?php }else{ ?>

                                <li class="" style="list-style: none">
                                    <a style="color: #555555;" href="login" class="active">Login</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    <!-- //nav -->
                    <!-- dwn -->
                   
                </div>
            </div>
        </header>
    </div>
    <!-- //navigation -->
    <!-- //header 2 -->
