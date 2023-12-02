<?php
$number1 = 23;
$number2 = 25;

// arithmetic operators
echo "arithmetic operators";
echo '<br />';
echo $number2 + $number1; //addition
echo '<br />';
echo $number2 - $number1; //subtraction
echo '<br />';
echo $number2 * $number1; //subtraction
echo '<br />';
echo $number2 / $number1; //division
echo '<br />';
echo $number2 % $number1; //modulus
echo '<br />';

// assignment operators
echo "assignment operators";
echo '<br />';
echo "Number 2 = ", $number2 += 10; //addition shorthand
echo '<br />';
echo "Number 2 = ", $number2 -= 10; //subtraction shorthand
echo '<br />';
echo "Number 2 = ", $number2 *= 10; //subtraction shorthand
echo '<br />';
echo "Number 2 = ", $number2 /= 5; //division shorthand
echo '<br />';
echo "Number 2 = ", $number2 %= 5; //modulus shorthand

echo '<br />';

$age1 = 10;
$age2 = '10';
// conditional operator (equal equal )
if ($age1 == $age2) {
    echo 'age 1 is equal to then age 2';
} else {
    echo 'age 1 is equal to then age 2';
}

echo '<br />';
// gpa calculator using logical operator
$marks = 79;

if ($marks >= 80 && $marks <= 100) {
    echo 'Letter Grader : A+, Grade Point: 5';
} else if ($marks >= 70 && $marks <= 79) {
    echo 'Letter Grader : A, Grade Point: 4';
} else if ($marks >= 60 && $marks <= 69) {
    echo 'Letter Grader : A-, Grade Point: 3.5';
} else if ($marks >= 50 && $marks <= 59) {
    echo 'Letter Grader : B, Grade Point: 3';
} else if ($marks >= 40 && $marks <= 49) {
    echo 'Letter Grader : C, Grade Point: 2';
} else if ($marks >= 33 && $marks <= 39) {
    echo 'Letter Grader : D, Grade Point: 2';
} else if ($marks >= 0 && $marks <= 32) {
    echo 'Letter Grader : Tumi Fail, Grade Point: 0';
} else {
    echo 'Invalid Marks';
}

echo '<br />';

// gpa calculator using switch case
switch ($marks) {
    case ($marks >= 80 && $marks <= 100):
        echo 'You got A+';
        break;
    case ($marks >= 70 && $marks <= 79):
        echo 'You got A';
        break;
    case ($marks >= 60 && $marks <= 69):
        echo 'You got A-';
        break;
    case ($marks >= 50 && $marks <= 59):
        echo 'You got B';
        break;
    case ($marks >= 40 && $marks <= 49):
        echo 'You got C';
        break;
    case ($marks >= 33 && $marks <= 39):
        echo 'You got D';
        break;
    case ($marks >= 0 && $marks <= 32):
        echo 'You got F';
        break;
    default:
        echo "Invalid Marks";
}
