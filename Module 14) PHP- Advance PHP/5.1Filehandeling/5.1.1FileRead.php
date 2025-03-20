<?php

include('filewrite.php');
$f=fopen('test.txt','r');

while(!feof($f))
{
	echo fgetc($f);
}
fclose($f);




?>