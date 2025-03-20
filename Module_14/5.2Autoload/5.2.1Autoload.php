<?php
function __autoload($a)
{
    include_once($a.".php");
}
$ob= new A;
$ob->display();
echo "<br>";
$ob1= new B;
$ob1->display1();