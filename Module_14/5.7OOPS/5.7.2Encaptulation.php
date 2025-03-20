<?php
//Example Of Encaptulation
//hiding the essential internal property of that module known as data abstraction.

class person
{
 
public $name;
 
public $age;
 
function __construct($n, $a)
 {
 
   $this->name=$n;

   $this->age=$a;
 
}
 

public function setAge($ag)
 
{
 
$this->ag=$ag;
 
}
 
public function display()
 
{
 
echo  "welcome ".$this->name."<br/>";
 
return $this->age-$this->ag;
 
}
 
}
 
$person=new person("Pankaj",25);
 
$person->setAge(20);
 
echo "You are ".$person->display()." years old";
