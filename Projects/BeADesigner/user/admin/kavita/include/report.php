<?php
include 'model.php';
$obj1=new model();
     
    if(!isset($_SESSION))
        {
            session_start();
        }
    date_default_timezone_set('Asia/kolkata');
    
 
	
	 if(isset($_REQUEST['search']))
     {
              $frm = $_REQUEST['date1'];
              $to = $_REQUEST['date2'];
             
			 $res=$obj->search_between_date($conn,"user_order","date",$frm,$to);
			echo 123;
     }
	
?>