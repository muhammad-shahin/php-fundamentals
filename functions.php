<?php
// function in php

// normal function
function print_name($name)
{
    return "My name is " . $name . "<br />";
};
echo print_name('Shahin');

// arrow function
// Note: Arrow functions are available starting from PHP 7.4.
$print_age = fn ($age) => "I am " . $age . ' years old' . "<br />";
echo $print_age(23);

// anonymous function(closures)
$print_address = function ($city) {
    return "I live in " . $city . "<br />";
};
echo $print_address("Gazipur");


// Variadic Functions (PHP 5.6 and later)
function print_hobbies(...$hobbies)
{
    foreach ($hobbies as $hobby) {
        echo "My Hobbies are :  $hobby <br />";
    }
}

echo print_hobbies("Coding", "Learning", "Thinking");
