<?php
	echo "<h1>Nested-If Statement</h1>";
	$a = 80;
	$b = 10;
	$c = 50;

	if ($a < $b) {
		if ($a < $c) {
			echo "<h3> $a (A) is less than $b (B) and $c (C) </h3>";
		}
	} else if ($b < $c) {
		echo "<h3> $b (B) is less than $a (A) and $c (C) </h3>";
	} else {
		echo "<h3> $c (C) is less than $a (A) and $b (B) </h3>";
	}

?>