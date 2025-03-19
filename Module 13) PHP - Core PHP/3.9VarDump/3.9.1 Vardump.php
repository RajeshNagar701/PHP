<?php
//handeling variable data type 
$a=10;
var_dump($a);


//var_export is use to return array into string
$a = array (1, 2, array ("a", "b", "c"));
var_export($a);

//isset is use to set the value
$num = '0'; 
  
if( isset( $num ) ) { 
    print_r(" $num is set with isset function <br>"); 
} 

?>
