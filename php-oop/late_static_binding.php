<?php
// late static binding

class base
{
 public static $name = "Muhammad";
 public static $name2 = "Muhammad";

 public function printName()
 {
  echo "<p> My first Name is " . self::$name . "</p>"; // self :: operator is used so that we can that property only inside this class.
  echo "<p> My last Name is " . static::$name2 . "</p>"; // static :: operator is used so that we can override that property from outside. If we use self instead of static it can not be override from outside
 }
}

class derived extends base
{
 public static $name2 = "Shahin";
}

$obj = new derived("name");
$obj->printName();
