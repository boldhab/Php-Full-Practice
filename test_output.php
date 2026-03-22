<?php
// echo and print are both used to output data in PHP, but they have some differences:
// 1. echo is a language construct and can take multiple parameters, while print is a function that takes only one argument.
// 2. echo does not return a value, while print returns 1, which can be used in expressions.
// 3. echo is generally faster than print because it does not return a value.

echo "hello Habtamu";
$name = "Habtamu";
$department = "Software Engineering";
echo "welcome to PHP programming, " , $name ,". You are studying " , $department , ".";
//multiple values can be output using echo by separating them with commas

echo "<br>";

print "hello Habtamu";
print "welcome to PHP programming";
print "welcome to PHP programming, " . $name . ". You are studying " . $department . ".";

$value = print "This is a test.";
echo "The value of print is: " . $value;
echo "<br>";

//print_r is a function that prints human-readable information about a variable, including arrays and objects. 
// It is often used for debugging purposes to display the structure and contents of complex data types.
$arr=["habtamu","mikias","filimon","biruk"];
print_r($arr);
echo "<br>";

$asso_arr=["name"=>"habtamu","age"=>25,"department"=>"software engineering"];
print_r($asso_arr);
echo "<br>";

// var_dump is a function that displays structured information about one or more variables, including their type and value. 
// It is more detailed than print_r and is often used for debugging purposes to inspect the contents of variables, especially when dealing with complex data types or when you need to see the data type along with the value.
var_dump($name);

echo "<br>";

var_dump($arr);
echo "<br>";
var_dump($asso_arr);
echo "<br>";

//var_export is a function that outputs or returns a parsable string representation of a variable. 
// It is similar to var_dump but provides a more human-readable output and can be used to generate code that can be evaluated with eval() to recreate the variable. 
// It is often used for debugging and for exporting variables in a format that can be easily reused in code.
var_export($name);
echo "<br>";
var_export($arr);
echo "<br>";
var_export($asso_arr);
echo "<br>";

?>