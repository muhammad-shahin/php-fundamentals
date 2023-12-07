<!-- oop concepts in php -->

<!-- class -->
<?php
// class is a reserved keyword in which use to create a class. Class is a template or a blueprint to creating objects
class Employee
{
 public $name, $age, $designation;

 // constructor to define the property of this class
 public function __construct($name = "No Name", $age = 23, $designation = "Kamla")
 {
  $this->name = $name;
  $this->age = $age;
  $this->designation = $designation;
 }
 public function print_employee()
 {
  echo "My name is : " . $this->name . ".<br> I am " . $this->age . " years old. <br>" . "My designation is " . $this->designation;
 }
}

$employee1 = new Employee();
$employee1->print_employee();
