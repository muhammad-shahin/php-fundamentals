<?php

$divisionNames = array("Dhaka", "Mymensingh", "Barishal", "Dinajpur"); //index array

print_r($divisionNames); //we can not print full array using echo we have to use print_r to print array

// but we can print single array element using echo
echo '<br />';
echo $divisionNames[1];


// associative array
// associative array work like a key value pair
$friends = array("Shahin" => 23, "Mahin" => 25, "Abdullah" => 22);

echo '<br />';
echo '---------------associative array -----------';
echo '<br />';
echo $friends['Shahin'];
echo '<br />';

// for each loop
$city = ["Gazipur", "Dhaka", "Chaka"];

// writing html inside echo
echo '<ul>';
foreach ($city as $value) {
    echo "<li>$value</li>";
}
echo '</ul>';
