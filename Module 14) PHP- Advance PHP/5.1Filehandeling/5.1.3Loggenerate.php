<?php
mysqli_report(MYSQLI_REPORT_STRICT);
try
{
	$con=new mysqli("localhost","root","");
}
catch(Exception $e)
{

	$folder="log";
	if(!file_exists($folder))
	{
		$dir=mkdir($folder,0777,true);
	}
	$file=$folder."/log_".date("d-m-Y").".log";
	$msg=$e->getMessage();
	file_put_contents($file,$msg, FILE_APPEND);

}




?>