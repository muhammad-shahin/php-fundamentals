<?php
// simple class object example
class CalculateSum
{
    // inside class every variable is property
    public $number1, $number2, $total_sum;
    //public keyword is the access modifier(this means we can access this property anywhere in this class)


    // inside class every function is method
    public function sum()
    {
        // you have to access the property using this-> keyword
        $this->total_sum = $this->number1 + $this->number2;
        return $this->total_sum;
    }
}

// this is how we invoke (call a new class)
$sum1 = new CalculateSum();

//this way we are accessing the property and methods of the CalculateSum class using -> arrow
$sum1->number1 = 10;
$sum1->number2 = 20;
echo $sum1->sum(), '<br />';

// ------------------------------------------------------
// a simple class object with constructor

class CreateBio
{
    public $name, $age, $phone;

    public function __construct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function generateBio()
    {
        $bio = "My name is $this->name. I am $this->age years old. My phone number is $this->phone";
        return $bio;
    }
}

// invoking the class
$bio1 = new CreateBio("Shahin", 23, "+8801857771268");
echo $bio1->generateBio();
