<?php
//Scop Resolution Operator is use for call constant value out of class

Class MyClass
{
const CONST_VALUE = 'A constant value';
}
echo MyClass:: CONST_VALUE;
?>
