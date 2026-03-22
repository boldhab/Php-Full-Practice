<?php
// Logical operators in PHP
// Logical operators are used to combine conditional statements.
// The main logical operators in PHP are:
// 1. AND (&&): Returns true if both operands are true.
// 2. OR (||): Returns true if at least one of the operands is true.
// 3. NOT (!): Returns true if the operand is false, and false if the operand is true. 
// 4. XOR (xor): Returns true if exactly one of the operands is true, but not both.

$a = true;
$b = false; 
// AND (&&)
echo "AND (&&): " . ($a && $b ? "true" : "false") . "<br>"; // Output: false    
// OR (||)
echo "OR (||): " . ($a || $b ? "true" : "false") . "<br>"; // Output: true
// NOT (!)
echo "NOT (!): " . (!$a ? "true" : "false") . "<br>"; // Output: false
echo "NOT (!): " . (!$b ? "true" : "false") . "<br>"; // Output: true
// XOR (xor)
echo "XOR (xor): " . ($a xor $b ? "true" : "false") . "<br>"; // Output: true
?>