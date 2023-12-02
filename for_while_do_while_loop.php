<?php
// for loop
for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br />';
}
// print odd number from 1 to 100 using for loop
for ($i = 1; $i <= 10; $i++) {
    $isOdd = $i % 2;
    if ($isOdd !== 0) {
        echo $i . ' is an odd number' . '<br />';
    }
}


// while loop
echo 'while loop' . '<br />';
$i = 1;
while ($i <= 10) {
    echo $i . '<br />';
    $i++;
}

// do while loop
echo 'do while loop' . '<br />';
do {
    echo $i . "<br />";
    $i++;
} while ($i <= 20);


// even number print using while loop
echo 'even number print using while loop' . '<br />';
$num = 21;
while ($num <= 30) {
    if ($num % 2 === 0) {
        echo 'even number from 21 to 30' . $num . '<br />';
    }
    $num++;
}
echo '<br />';
// even number print using do while loop
echo 'even number print using do while loop' . '<br />';
$num = 31;
do {
    if ($num % 2 === 0) {
        echo 'even number from 31 to 40' . $num . '<br />';
    }
    $num++;
} while ($num <= 40);
