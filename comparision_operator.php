<?php
// Comparison operators in PHP
// Comparison operators are used to compare two values.
// The result of a comparison operation is either true or false.

$a = 10;
$b = 20;

// Equal (==): Returns true if the two values are equal.
echo "Equal: " . ($a == $b ? "true" : "false") . "<br>";

// Not equal (!=): Returns true if the two values are not equal.
echo "Not equal: " . ($a != $b ? "true" : "false") . "<br>";

// Strictly equal (===): Returns true if the two values are equal and have the same type.
echo "Strictly equal: " . ($a === $b ? "true" : "false") . "<br>";

// Strictly not equal (!==): Returns true if the two values are not equal or do not have the same type.
echo "Strictly not equal: " . ($a !== $b ? "true" : "false") . "<br>";

// Greater than (>): Returns true if the left operand is greater than the right operand.
echo "Greater than: " . ($a > $b ? "true" : "false") . "<br>";

// Less than (<): Returns true if the left operand is less than the right operand.
echo "Less than: " . ($a < $b ? "true" : "false") . "<br>";

// Greater than or equal to (>=): Returns true if the left operand is greater than or equal to the right operand.
echo "Greater than or equal to: " . ($a >= $b ? "true" : "false") . "<br>";

// Less than or equal to (<=): Returns true if the left operand is less than or equal to the right operand.
echo "Less than or equal to: " . ($a <= $b ? "true" : "false") . "<br>";
?>