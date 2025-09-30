<?php
echo "Bilangan Kelipatan 3 (1-30):<br>";
$i = 1;
do {
    if ($i % 3 == 0) {
        echo $i . " ";
    }
    $i++;
} while ($i <= 30);
?>
