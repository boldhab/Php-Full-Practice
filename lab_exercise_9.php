<!-- Write a PHP script to handle the following scenario. Given
an array of students, where each student is represented by
an associative array with name and scores, compute each
student's average score and determine whether the
student passes or fails. A student passes if their average
score is greater than or equal to 60; otherwise, they fail. -->
<?php
$students = [
    ["name" => "hab", "scores" => [85, 90, 78]],
    ["name" => "abe", "scores" => [55, 60, 58]],
    ["name" => "kebe", "scores" => [70, 75, 80]],
];

foreach ($students as $student) {
    $name = $student["name"];
    $scores = $student["scores"];
    $sum = 0;
    foreach ($scores as $score) {
        $sum += $score;
    }
    $average = $sum / count($scores);
    if ($average >= 60) {
        echo "$name: Average = $average, Status = Pass <br>";
    } else {
        echo "$name: Average = $average, Status = Fail <br>";
    }
    
}




?>