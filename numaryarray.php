<?php

$numbers = array(1, 2, 3, 4, 5);

echo "<h3>First Method (Numeric Array)</h3>";
foreach ($numbers as $home) {
    echo "Home is $home <br>";
}


$numbers = []; 
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

echo "<h3>Second Method (String Array)</h3>";
foreach ($numbers as $home) {
    echo "Home is $home <br>";
}
?>
