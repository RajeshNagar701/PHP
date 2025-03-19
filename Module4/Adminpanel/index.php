<!-- admin panel of batch project -->
<!--Login page for session create -->
<?php

include("connection.php");
error_reporting(0);
 session_start();
if(isset($_POST['login']))
{
    $u=$_POST['uname'];
    $p=$_POST['pass'];
    $sql="select * from admin where username='$u' and password='$p'";
    $que=$con->query($sql);
    $row=$que->fetch_object();
    //print_r($row);
    if(count($row)>0)
    {
        if(isset($_POST['remember']))
        {

             setcookie('adminlogin',$u,time()+20);   
        }

         $_SESSION['login']=$row->username;
         header('location:home.php');
    }
    else
    {
        echo "<script>alert('wrong Username or Password!')</script>";
    }

}
if(isset($_COOKIE['adminlogin']))
{
    $u=$_COOKIE['adminlogin'];
}
else
{
    $u="";
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
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
    <div class="panel-body">
               <form role="form" method="post">
                                    <hr />
                <h5>Enter Details to Login</h5>
                                       <br />
             <div class="form-group input-group">
                 <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                 <input type="text" class="form-control" placeholder="Your Username " value="<?php echo  $u ?>"  name="uname" />
                                        </div>
                <div class="form-group input-group">
                   <span class="input-group-addon">
                    <i class="fa fa-lock"  ></i></span>
                  <input type="password" class="form-control"  placeholder="Your Password" name="pass" />
               </div>
                <div class="form-group">
                    <label class="checkbox-inline">
                <input type="checkbox" name="remember" /> Remember me
                     </label>
                    <span class="pull-right">
                      <a href="index.html" >Forget password ? </a> 
                   </span>
                </div>
                                     
            <input type="submit" class="btn btn-primary " value="Login" name="login">
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
