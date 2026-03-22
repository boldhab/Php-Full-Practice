<!-- Write a PHP script that multiplies a number by 2 and
prints each result until a value is >= 30 (execute the loop at
least once).
 Input example: start with 2
 Output example sequence: 2, 4, 8, 16, 32 -->

<?php
$num = 2;   
do {
    echo $num . "<br>";
    $num *= 2; // Multiply the number by 2
} while ($num < 30); // Continue the loop until the number is >= 30
?>