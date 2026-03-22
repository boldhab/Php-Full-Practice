<?php
// Array operators in PHP
// Array operators are used to compare or combine arrays.
// The main array operators in PHP are:
// 1. Union (+): Returns the union of two arrays. If there are duplicate keys, the value from the left array will be used.
// 2. Equality (==): Returns true if the two arrays have the same key/value pairs, regardless of the order of the pairs.
// 3. Identity (===): Returns true if the two arrays have the same key/value pairs in the same order and of the same types.
// 4. Inequality (!=): Returns true if the two arrays do not have the same key/value pairs.
// 5. Non-identity (!==): Returns true if the two arrays do not have the same key/value pairs in the same order or of the same types.

$array1 = array("a" => "apple", "b" => "banana");
$array2 = array("b" => "banana", "a" => "apple");
$array3 = array("a" => "apple", "b" => "banana", "c" => "cherry");
// Union (+)
$result = $array1 + $array3; // $result will be array("a" => "apple", "b" => "banana", "c" => "cherry")
// Equality (==)
echo "Equality (==): " . ($array1 == $array2 ? "true" : "false") . "<br>"; // Output: true
// Identity (===)
echo "Identity (===): " . ($array1 === $array2 ? "true" : "false") . "<br>"; // Output: false
// Inequality (!=)      
echo "Inequality (!=): " . ($array1 != $array3 ? "true" : "false") . "<br>"; // Output: true
// Non-identity (!==)
echo "Non-identity (!==): " . ($array1 !== $array2 ? "
true" : "false") . "<br>"; // Output: true
?>