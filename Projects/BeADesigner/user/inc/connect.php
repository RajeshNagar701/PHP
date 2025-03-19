<?php
class connect
{
		public function conect()
		{
				$con=new MySQLi("localhost","root","","22June_project"); 
				return $con;
		}
}
?>