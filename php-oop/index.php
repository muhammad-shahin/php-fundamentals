<?php
// trait class in oop
trait PersonalInfo
{
 // we can add multiple function inside one trait
 public function printName($name = "Random Name")
 {
  echo "<h1> Hello there, I am '$name' from Earth.";
 }
 public function printAge($age = "Random Age")
 {
  echo "<h1>I am '$age'  years old.";
 }
}

trait EducationalInfo
{
 public function ssc($year, $gpa, $group)
 {
  echo "<h1>I completed my SSC in '$year' from '$group' group and got GPA '$gpa' out 5.00";
 }
}

class Bio
{
 use PersonalInfo, EducationalInfo; //we can add multiple trait by separating with comma
 // to use a trait object we have to use the "use" keyword
}

$obj = new Bio();
$obj->printName("Muhammad Shahin");
$obj->printAge(23);
$obj->ssc(2017, 4.82, "Science");
