<?php
//Example of Constructor 
//Call itself when object creat

class MyDestructableClass 
{
function __construct() 
{
print "In constructor\n";
$this->name = "MyDestructableClass";
}
  
  //destroy memory which allocated using Constructor
function __destruct() 
{
print "Destroying " . $this->name . "\n";
}
}

$obj = new MyDestructableClass();


//constructor in SubClass
class ConstructExample{
	public $AuthorName = "";
	
	function __construct()
	{
		echo $this->AuthorName = "Jay Amin"; // $this it is a key word
	}
	function test()
	{
		return "Test method calling";
	}
}

class SecondClass extends ConstructExample{
	
	function __construct()
	{
		# code...
		parent::__construct(); // calling parent constructor with the help of :: Scope Resolution Operator parent is a key word for accessing parent property in child 
		echo "called";
	}
}
//End Constructor

//Parameterised  Multiple Constructorclass A 
{ 
    function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
    
    function __construct1($a1) 
    { 
        echo('__construct with 1 param called: '.$a1."<br>"); 
    } 
    
    function __construct2($a1,$a2) 
    { 
        echo('__construct with 2 params called: '.$a1.','.$a2."<br>"); 
    } 
    
    function __construct3($a1,$a2,$a3) 
    { 
        echo('__construct with 3 params called: '.$a1.','.$a2.','.$a3."<br>"); 
    } 
} 
$o = new A('sheep'); 
$o = new A('sheep','cat'); 
$o = new A('sheep','cat','dog'); 

//End Constructor

//This Constructor

Class Foo {
  var $test = "Just Jay";	
  public $Name = "Jay Amin";	
  function Foo() {
  	echo $test;
  	echo $this->Name;
    // return $this->__construct();
  }
  function __construct() {
    // whatever
    echo "calling";
  }
}
$ob = new Foo;
//end Consrtuctor

//Copy Constructor

class Person{
    public $name;
    public $address;
	
    public function __construct($name){ // parameterized constructor with name argument
        $this->name = $name; 
    }
    public function __clone(){ 
    } 
}
$perObj1 = new Person("Full Stack Tutorials"); // parameterized constructor with name argument
$perObj2 = clone $perObj1; // copy constructor initialize $perObj2 with the values of $perObj1
echo $perObj2->name;
//End Constructor




?> 
