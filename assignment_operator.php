<?php
// Assignment operators in PHP
// Assignment operators are used to assign values to variables.
// The basic assignment operator is the equal sign (=), which assigns the value on the right to the variable on the left. 
// In addition to the basic assignment operator, there are several compound assignment operators that combine an arithmetic operation with assignment. 
// These include:
// 1. Addition assignment (+=): Adds the right operand to the left operand and assigns the result to the left operand.
// 2. Subtraction assignment (-=): Subtracts the right operand from the left operand and assigns the result to the left operand.
// 3. Multiplication assignment (*=): Multiplies the left operand by the right operand and assigns the result to the left operand.
// 4. Division assignment (/=): Divides the left operand by the right operand and assigns the result to the left operand.
// 5. Modulus assignment (%=): Takes the modulus of the left operand by the right operand and assigns the result to the left operand.
// 6. Exponentiation assignment (**=): Raises the left operand to the power of the right operand and assigns the result to the left operand.

// Example calculator
$num = 10;
$num += 5; // equivalent to $num = $num + 5;
echo "After addition assignment: " . $num . "<br>"; // Output: 15   
$num -= 3; // equivalent to $num = $num - 3;
echo "After subtraction assignment: " . $num . "<br>"; // Output: 12
$num *= 2; // equivalent to $num = $num * 2;
echo "After multiplication assignment: " . $num . "<br>"; // Output: 24
$num /= 4; // equivalent to $num = $num / 4;
echo "After division assignment: " . $num . "<br>"; // Output: 6
$num %= 4; // equivalent to $num = $num % 4;
echo "After modulus assignment: " . $num . "<br>"; // Output: 2
$num **= 3; // equivalent to $num = $num ** 3;
echo "After exponentiation assignment: " . $num . "<br>"; // Output: 8
?>

