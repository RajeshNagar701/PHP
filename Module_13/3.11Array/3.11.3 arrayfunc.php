<?php
	$a=array("r","b","p","a","r");
	$b=array("r"=>"red","blue"=>array("white","black"),"pink");
	$c=array(1,2,3,4);
	echo "<pre>";
	$d=array("a"=>"PHP","b"=>".Net","c"=>"Java");
	//print_r(array_combine($a,$b));

	//print_r(array_merge($a,$b));
	echo "Count value:--";
	print_r(array_count_values($a));

	echo "Reverse:--";
	print_r(array_reverse($a));


	echo "Sum is:".array_sum($c);
	echo "<br>";
	echo "Search array=".array_search("red", $b);
	echo "<br>";
	arsort($d);
	echo "Shorting Array:--";
	print_r($d);

	echo "<br>";
	echo "Array Size is:-".sizeof($d);
	echo "<br>";
	echo "Array Add:--";
	array_push($b,"yellow");
	print_r($b);

	echo "Array Delete:--";
	array_pop($b);
	print_r($b);

	echo "In array exist:---";
	if(in_array("PHP",$d))
	{
		echo "PHP is Available";
	}
	else
	{
		echo "PHP is not Available";
	}

?>