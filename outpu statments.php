<?php
// Output statements in PHP

// Using echo to output a string
echo "Hello, World!<br>";
// Using echo to output multiple values
$name="hab bef";
$dep="software engineering";
echo "My name is " . $name . " and I am studying " . $dep . ".<br>";
// Using print to output a string

$resprint = print "my name is " . $name . "<br>". "I am studying " . $dep . ".<br>";
echo "The return value of print is: " . $resprint . "<br>";

// Using print_r to format output
$Array1 = array("name" => $name, "department" => $dep);
// Indexed array
$Array2 = ["Computer Science", "Software Engineering", "Information Technology"];;
print_r($Array1);
echo "<br>";
print_r($Array2);

// Using var_dump to display detailed information about a variable
echo "<br>";
var_dump($name);
echo "<br>";
var_dump($Array2);

// Using var_export 
echo "<br>";
var_export($name);
echo "<br>";
var_export($Array2);

?>