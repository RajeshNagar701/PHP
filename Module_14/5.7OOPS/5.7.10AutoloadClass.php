<?php
//automatic call class from another class file
function __autoload($class_name)
{
require_once $class_name . '.php';
}
$obj = new MyClass1();
$obj2 = new MyClass2();
?> 
