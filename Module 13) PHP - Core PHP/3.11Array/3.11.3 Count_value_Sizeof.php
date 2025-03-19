<?php
//size of array example for calculate number of array elements
$a = array("Name","TOPS","techno","Name",123,456.1,true);
echo "<pre>";
print_r($a);
print_R(array_count_values($a));
print_R(count($a));
echo "<br>";
print_R(sizeof($a));
?>
