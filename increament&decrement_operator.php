<?php
// Increment and decrement operators in PHP
// Increment and decrement operators are used to increase or decrease the value of a variable by 1, respectively.
// The increment operator (++) adds 1 to the variable, while the decrement operator (--) subtracts 1 from the variable.
$num = 5;
// Increment operator (++)
echo "Original value: " . $num . "<br>"; // Output: 5
$num++; // equivalent to $num = $num + 1;
echo "After increment: " . $num . "<br>"; // Output: 6
// Decrement operator (--)
$num--; // equivalent to $num = $num - 1;
echo "After decrement: " . $num . "<br>"; // Output: 5

// Pre-increment and post-increment
$num = 5;
echo "Pre-increment: " . (++$num) . "<br>"; // Output: 6 (num is incremented before being used)
echo "Post-increment: " . ($num++) . "<br>"; // Output: 6 (num is used before being incremented)
echo "Current value: " . $num . "<br>"; // Output: 7 (num is now 7 after post-increment)
// Pre-decrement and post-decrement
$num = 5;
echo "Pre-decrement: " . (--$num) . "<br>"; // Output: 4 (num is decremented before being used)
echo "Post-decrement: " . ($num--) . "<br>"; // Output: 4 (num is used before being decremented)    
echo "Current value: " . $num . "<br>"; // Output: 3 (num is now 3 after post-decrement)


?>