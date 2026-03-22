<?php
//reference
// In PHP, a reference is a way to create an alias for a variable.
// When you assign a variable by reference, you are creating a reference to the original variable rather than creating a new copy of it. 
// This means that any changes made to the reference will also affect the original variable.
$name = "Hab";
$reference_name = &$name; // creating a reference to the variable $name
echo "Original name: " . $name . "<br>"; // Output: Hab
echo "Reference name: " . $reference_name . "<br>"; // Output: Hab
$reference_name = "Habtamu"; // changing the value of the reference variable
echo "Original name after change: " . $name . "<br>"; // Output: Habtamu
echo "Reference name after change: " . $reference_name . "<br>"; // Output: Habtamu
// In this example, we created a reference to the variable $name using the & symbol.
// When we changed the value of $reference_name, it also changed the value of $name because they are referencing the same variable in memory. 
// This is a powerful feature of PHP that allows you to work with variables more efficiently and can be particularly useful when dealing with large data structures or when you want to pass variables by reference to functions.