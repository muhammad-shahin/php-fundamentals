<?php
// overriding property and method
class Base
{
 public $name = "Shahin";
 public function printName()
 {
  echo "<h3>My last name is : $this->name</h3>";
 }
}

class Derived extends Base
{
 // now if we declare the same property that already exist in our base class it will be an override property
 public $name = "Muhammad";
 // override the name property

 // here we declare the same method (printName) that already exist in our base class it is an override method now
 public function printName()  // override the printName method
 {
  echo "<h3>My first name is : $this->name</h3>";
 }
}

$obj1 = new Base();
$obj2 = new Derived();

$obj1->printName();
$obj2->printName();
