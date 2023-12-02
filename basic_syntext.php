<?php
// php variable syntext
$message = 'Hello Mamma';

echo 'Hello World';
echo '<br />';
echo $message;

// php data type
$one = "One"; //string
$two = 2; //integer
$three = 4.4; //float
$four = true; //boolean
$five = array(123, "Hello"); //array
$six = null; //null type

echo '<br />';
echo var_dump($three); //to check dat type of any variable
echo '<br />';


$number1 = 23;
$number2 = 25;

// conditional operator (if else)
if ($number2 > $number1) {
    echo 'Number 2 is grater then Number 1';
} else {
    echo 'Number 1 is less then Number 2';
}
