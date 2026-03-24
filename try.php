<?php
$students = [
    ["name" => "hab", "scores" => 79],
    ["name" => "abe", "scores" => 75],
    ["name" => "kebe", "scores" => 80],
    ["name" => "miki", "scores" => 65],
    ["name" => "sara", "scores" => 90],
    ["name" => "dani", "scores" => 85],
];

// Sort descending


// Display
foreach ($students as $stu) {
    rsort($stu["scores"]);
    foreach ($stu["scores"] as $score) {
        echo $score . "\n";
    }
}
?>