<?php
// Switch condition in PHP
// The switch statement is used to perform different actions based on different conditions.
// Syntax:
// switch (expression) {
//     case value1:
//         // code to be executed if expression equals value1
//         break;
//     case value2:
//         // code to be executed if expression equals value2
//         break;       
//     ...  
//     default:
//         // code to be executed if expression doesn't match any case
// }    

$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    case "Wednesday":
        echo "Today is Wednesday.";
        break;
    case "Thursday":
        echo "Today is Thursday.";
        break;
    case "Friday":
        echo "Today is Friday.";
        break;
    case "Saturday":
        echo "Today is Saturday.";
        break;
    case "Sunday":
        echo "Today is Sunday.";
        break;
    default:
        echo "Invalid day.";
}