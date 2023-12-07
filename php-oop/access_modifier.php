<?php

class Database
{
 protected $connection;
 //protected property can only accessible inside the class it's created and the derived class (class that will extends this class)
 public function __construct()
 {
  $db_host = "localhost";
  $db_username = "root";
  $db_password = "";
  $db = "todo_app";
  // accessing the connection property
  $this->connection = mysqli_connect($db_host, $db_username, $db_password, $db);
  echo "Connected to database :)";
 }
}

// quey class
class Query extends Database
{
 public function getUser()
 {
  $query = "SELECT * FROM users WHERE user_id=1";
  $result = mysqli_query($this->connection, $query);
  if (isset($result)) {
   return mysqli_fetch_assoc($result);
  }
 }
}
$connectDb = new Database();
$getUser = new Query();
$user = $getUser->getUser();
echo "<pre>";
print_r($user);
echo "</pre>";

/**
 * ----------------------------
 * protected - access Modifier
 * -----------------------------
 * in this example we extends the database class inside query class $connection property inside Database class is using protected access_modifier that's why we can access this inside query class. But we can not access the $connection outside it's class. for example - 
 * $obj = new Database();
 * $obj->connection = "Something else";
 * we can't access it like that outside of it's won or derived class as it is protected
 */

class base
{
 public $public = "Hello I am public :)"; //can be access anywhere
 protected $protected = "Hello I am protected :]"; //can only access inside this class and extended classes
 private $private = "Hello I am private :/"; //can only access inside this class
}

$baseObj = new base();
echo $baseObj->public;
// echo $baseObj->protected;
//protected property can not access outside of the class
// echo $baseObj->private;
//private property can not access outside of the class

class derived extends base
{
 public function print()
 {
  echo $this->public;
  echo $this->protected;
  // echo $this->private;
  //can not access here as it is private
 }
}
