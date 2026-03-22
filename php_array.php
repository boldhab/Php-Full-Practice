<?php
// PHP Arrays
// An array is a special variable, which can hold more than one value at a time.
// In PHP, there are three types of arrays:
// 1. Indexed arrays (numeric indices)
// 2. Associative arrays (string keys)
// 3. Multidimensional arrays

// Indexed arrays
$colors = array("red", "green", "blue");
echo $colors[0]; // Output: red
echo $colors[1]; // Output: green
echo $colors[2]; // Output: blue

// Associative arrays
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old."; // Output: Peter is 35 years old.

// Multidimensional arrays
$students = array(
    array("John", 20),
    array("Jane", 22),
    array("Bob", 21)
);
echo $students[0][0]; // Output: John
echo $students[0][1]; // Output: 20
echo $students[1][0]; // Output: Jane
echo $students[1][1]; // Output: 22
echo $students[2][0]; // Output: Bob
echo $students[2][1]; // Output: 21  

//two dimensional array
$fruits = array(
    "citrus" => array("orange", "lemon", "lime"),
    "berries" => array("strawberry", "blueberry", "raspberry")
);
echo $fruits["citrus"][0]; // Output: orange
echo $fruits["citrus"][1]; // Output: lemon
echo $fruits["citrus"][2]; // Output: lime
echo $fruits["berries"][0]; // Output: strawberry
echo $fruits["berries"][1]; // Output: blueberry
echo $fruits["berries"][2]; // Output: raspberry            



    //three dimensional array
$matrix = array(
    array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    ),
    array(              
        array(10, 11, 12),
        array(13, 14, 15),
        array(16, 17, 18)
    ),
    array(
        array(19, 20, 21),
        array(22, 23, 24),
        array(25, 26, 27)
    )
);
echo $matrix[0][0][0]; // Output: 1
echo $matrix[0][0][1]; // Output: 2
echo $matrix[0][0][2]; // Output: 3
echo $matrix[0][1][0]; // Output: 4
echo $matrix[0][1][1]; // Output: 5
echo $matrix[0][1][2]; // Output: 6
echo $matrix[0][2][0]; // Output: 7
echo $matrix[0][2][1]; // Output: 8
echo $matrix[0][2][2]; // Output: 9
echo $matrix[1][0][0]; // Output: 10        

echo $matrix[1][0][1]; // Output: 11
echo $matrix[1][0][2]; // Output: 12
echo $matrix[1][1][0]; // Output: 13
echo $matrix[1][1][1]; // Output: 14
echo $matrix[1][1][2]; // Output: 15        

echo $matrix[1][2][0]; // Output: 16
echo $matrix[1][2][1]; // Output: 17
echo $matrix[1][2][2]; // Output: 18
echo $matrix[2][0][0]; // Output: 19    
echo $matrix[2][0][1]; // Output: 20
echo $matrix[2][0][2]; // Output: 21
echo $matrix[2][1][0]; // Output: 22
echo $matrix[2][1][1]; // Output: 23        
echo $matrix[2][1][2]; // Output: 24
echo $matrix[2][2][0]; // Output: 25
echo $matrix[2][2][1]; // Output: 26
echo $matrix[2][2][2]; // Output: 27





//sort array
$numbers = array(4, 2, 8, 6);
sort($numbers); // Sorts the array in ascending order
echo "Sorted numbers: " . implode(", ", $numbers); // Output: Sorted numbers: 2, 4, 6, 8    
rsort($numbers); // Sorts the array in descending order
echo "Sorted numbers: " . implode(", ", $numbers); // Output: Sorted numbers: 8, 6, 4, 2    
//ksort array
$ages = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
ksort($ages); // Sorts the array by key in ascending order
echo "Sorted ages: " . implode(", ", $ages); // Output: Sorted ages: 35, 37, 43
krsort($ages); // Sorts the array by key in descending order
echo "Sorted ages: " . implode(", ", $ages); // Output: Sorted ages: 43, 37, 35
//asort array
$ages = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
asort($ages); // Sorts the array by value in ascending order
echo "Sorted ages: " . implode(", ", $ages); // Output: Sorted ages: 35, 37, 43
arsort($ages); // Sorts the array by value in descending order
echo "Sorted ages: " . implode(", ", $ages); // Output: Sorted ages: 43, 37, 35 

?>