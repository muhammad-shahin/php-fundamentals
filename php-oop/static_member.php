<?php
// static member

class base
{
 public static $name = "Shahin";
 public static function show()
 {
  echo "My name is " . self::$name; //to access a static member inside the class it's created we have to use "self::$property_name"
  echo "<br>";
 }

 public function __construct($name)
 {
  self::$name = $name; //we can override the static member value
  self::show();
 }
}

$baseObj = new base("Mohi Uddin");
$baseObj->show();
//output will be 2x My Name is Mohi Uddin


// now let's extends the base class into derived class

class derived extends base
{
 public static function show()
 {
  echo "My name is " . parent::$name; //to access a static member outside the class it's created we have to use "parent::$property_name"
  echo "<br>";
 }
}

$derivedObj = new derived("Motin Uddin");

// NOTE: main important thing to remember about static member is we can access static properties/methods outside of the class without creating any object of that class

// EXAMPLE :

echo "My name is : " . base::$name;
// if we want to use the static member outside of the class we have pass the class name then :: and then static property/method name
