<?php
//for loop in PHP
// The for loop is used to execute a block of code a specified number of times.
// Syntax:
// for (initialization; condition; increment/decrement) {
//     // code to be executed
// }
// Example: Print numbers from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

//while loop in PHP
// The while loop is used to execute a block of code as long as a specified condition is true.
// Syntax:
// while (condition) {
//     // code to be executed
// }
// Example: Print numbers from 1 to 10
$j = 1;
while ($j <= 10) {
    echo $j . "<br>";
    $j++;
}

//do-while loop in PHP
// The do-while loop is similar to the while loop, but it guarantees that the block of code will be executed at least once, even if the condition is false.
// Syntax:
// do {
//     // code to be executed
// } while (condition);
// Example: Print numbers from 1 to 10
$k = 1;
do {
    echo $k . "<br>";
    $k++;
} while ($k <= 10); 

//foreach loop in PHP
// The foreach loop is used to iterate over arrays. 
// It provides an easy way to access each element in an array without needing to manage the loop counter.
// Syntax:
// foreach (array as $value) {
//     // code to be executed
// }
// Example: Print each element in an array
$fruits = array("apple", "banana", "cherry");
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>