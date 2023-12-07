<!-- oop concepts in php -->

<!-- class -->
<?php
// class is a reserved keyword in which use to create a class. Class is a template or a blueprint to creating objects
class Employee
{
 public $name, $age, $designation, $salary;

 // constructor to define the property of this class
 public function __construct($name = "No Name", $age = 23, $designation = "Kamla", $salary = 10000)
 {
  $this->name = $name;
  $this->age = $age;
  $this->designation = $designation;
  $this->salary = $salary;
 }
 public function info()
 {
  echo "<h1>Employee Info</h1> <h3>My name is : $this->name. </h3>
  <h3> I am $this->age years old. </h3>
  <h3>My designation is $this->designation</h3>
  <h3>My salary is $this->salary</h3>";
 }
}

class Manager extends Employee
{
 public $transportBill = 1500;
 public $phoneBill = 350;
 public $totalSalary;
 public function info()
 {
  $this->totalSalary = $this->salary + $this->phoneBill + $this->transportBill;
  $this->designation = "Manager";
  echo "<h1>Manager Info</h1> <h3>My name is : $this->name. </h3>
  <h3> I am $this->age years old. </h3>
  <h3>My designation is $this->designation</h3>
  <h3>My salary is $this->salary</h3>";
 }
}

$employee1 = new Employee("Muhammad Shahin", 23, "Web Developer");
$employee1->info();

$employee2 = new Manager("Muhammad Billal Mia", 32, "Manager", 25000);
$employee2->info();
