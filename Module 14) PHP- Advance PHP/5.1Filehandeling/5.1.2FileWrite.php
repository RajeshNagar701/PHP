<?php

// When we develop a web application using PHP, quite often we need to work with external files, like reading data from a file or maybe writing user data into file etc

$f=fopen("test1.txt",'x');
fwrite($f," Good work!");
fclose($f);

//R mode is use for read file
$f=fopen('test.txt','r');
while(!feof($f))
{
	echo fgetc($f);
}
fclose($f);

?>
