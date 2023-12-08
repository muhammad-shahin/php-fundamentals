<?php
// abstract in php
abstract class Parents
{
 abstract protected function printSum($num1, $num2);
 //we can only declare abstract function but cannot initiate inside the abstract class
}

// create a new class and extend the abstract class

class Child extends Parents
{
 // declaring the same method/function taht we declared in Parent class
 public function printSum($num1, $num2)
 // NOTE: we have to give the same number of arguments that we give in the abstract class (variable name can be different but the number of arguments should be same)
 {
  echo "<h3>Sum is : " . $num1 + $num2 . "</h3>";
 }
}

$obj = new Child();
$obj->printSum(10, 20);
