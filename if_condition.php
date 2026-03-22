<?php
// If condition in PHP
// The if statement is used to execute a block of code if a specified condition is true.
// Syntax:
// if (condition) {
//     // code to be executed if condition is true
// }

// example grade reoprting 
$grade = 85;
if ($grade >= 90) {
    echo "Grade: A";
} elseif ($grade >= 80) {
    echo "Grade: B";
} elseif ($grade >= 70) {
    echo "Grade: C";
} elseif ($grade >= 60) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}

?>