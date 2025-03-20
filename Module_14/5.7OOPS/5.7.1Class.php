<?php
//Simple basic Class and Object Example

class simpleclass
{
	public $var = "Hello i am just Value";
	public function display()
	{
		echo $this->var;
	}
}
$s= new simpleclass();
$s->display();
?>
