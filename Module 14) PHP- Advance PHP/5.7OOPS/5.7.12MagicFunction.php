<?php
//magic function example
//contruct/desctuct/get/call/unset/sleep /wakeup etc
class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // Force a copy of this->object, otherwise
        // it will point to same object.
        $this->object1 = clone $this->object1;
    }
}
$obj = new MyCloneable();
echo "<pre>";

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;


print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);

//get / set/ Unset function
class PropertyTest
{
    /**  Location for overloaded data.  */
    private $data = array();

    /**  Overloading not used on declared properties.  */
    public $declared = 1;

    /**  Overloading only used on this when accessed outside the class.  */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'<br>";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting '$name'<br>";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        echo "<pre>";
        print_r($trace);
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],E_USER_NOTICE);
        return null;
    }

    /**  As of PHP 5.1.0  */
    public function __isset($name)
    {
        echo "Is '$name' set?<br>";
        return isset($this->data[$name]);
    }

    /**  As of PHP 5.1.0  */
    public function __unset($name)
    {
        echo "Unsetting '$name'<br>";
        unset($this->data[$name]);
    }

    /**  Not a magic method, just here for example.  */
    public function getHidden()
    {
        return $this->hidden;
    }
}


// echo "<pre><br>";

$obj = new PropertyTest;

$obj->a = 1; // __set()
// $obj->testsetfunction = "testing"; // __set()
// $obj->testsetfunction = "checking"; // __set()
echo $obj->test . "<br><br>"; // __get()

// var_dump(isset($obj->a));
// unset($obj->a);
// var_dump(isset($obj->a));
// echo "<br>";

echo $obj->declared . "<br><br>";

echo "Let's experiment with the private property named 'hidden':<br>";
echo "Privates are visible inside the class, so __get() not used...<br>";
echo $obj->getHidden() . "<br>";
echo "Privates not visible outside of class, so __get() is used...<br>";
echo $obj->hidden . "<br>";
//get /set /unset function close

//Set Static function start



// __call() is triggered when invoking inaccessible methods in an object context.

// __callStatic() is triggered when invoking inaccessible methods in a static context.
class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "<br>";
    }

    /**  As of PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "<br>";
    }
}

// $obj = new MethodTest;
// $obj->runTest('in object context','test','check','data');

MethodTest::runTest('in static context');  // As of PHP 5.3.0
//set Static function end


//Sleep/wakup function

class Connection
{
    protected $link;
    private $dsn, $username, $password;
    
    public function __construct($dsn, $username, $password)
    {
        ECHO "<br>constr calling";
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }
    
    private function connect()
    {
        ECHO "<br>Connect calling";
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }
    
    public function __sleep()
    {
        ECHO "<br>__sleep calling";
        return array('dsn', 'username', 'password');
    }
    
    public function __wakeup()
    {
        ECHO "<br>__wakeup calling";
        $this->connect();
    }
}

$O = new Connection("mysql:host=localhost;dbname=masterdatabase1","root","");
//Sleep /wakeup function End

//To String function start

// Declare a simple class
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('test');
// $class = new TestClass(array('Hello','test')); // error
echo $class;
//To String function End



?>
