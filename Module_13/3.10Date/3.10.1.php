<?php
//to display current date --date function is use
ECHO time();

echo "<br>";
echo $Date = "2010-10-15";
echo "<br>";
echo date("d-m-Y",strtotime($Date));

//date function

// PHP program to demonstrate the checkdate() function  
  
$month = 12;  
$day = 31;  
$year = 2017;  
  
// returns a boolean value after validation of date  
var_dump(checkdate($month, $day, $year)); 
//checkdate End  

//date_date_set function
$date=date_create();
date_date_set($date,2020,10,30);
echo date_format($date,"Y/m/d");
//datedate set function end

//date parse function is use for display date details in array
print_r(date_parse("2017-11-08 11:10:40.5"));
//end date parse

// Print the array from getdate()
print_r(getdate());
echo "<br><br>";

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

//end get date

//mk time is use for display date by ourself
$km=mktime(0,0,0,date('m'),date('d')+5,date('y'))//display day after 5 days
  echo date("D-m-Y",$mk);
//end mktime





//date timezone
date_default_timezone_set ("Asia/Calcutta")//set timezone for ;
?>
