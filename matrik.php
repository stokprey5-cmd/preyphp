<?php

$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];


$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];


$C = [];


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}


echo "<h2>Penjumlahan Dua Matriks 3x3</h2>";

echo "<h3>Matriks A:</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $A[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h3>Matriks B:</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $B[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<h3>Hasil Penjumlahan (C = A + B):</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
?>
