<?php
// interface classes

interface parent1
{
 // method can be declared but can't be initialized inside any interface class
 function calc($a, $b);
}

interface parent2
{
 function sub($c, $d);
}

class childClass implements parent1, parent2
{
 // NOTE: we must have to use the methods of the interfaces that we are implementing
 public function calc($a, $b) //the method should be compatible with the parent class (means we have to keep the same amount of arguments we used in parent class)
 {
  echo $a + $b;
 }
 public function sub($c, $d)
 {
  echo $c - $d;
 }
}

$obj = new childClass();
$obj->calc(10, 35);
echo "<br>";
$obj->sub(45, 32);
