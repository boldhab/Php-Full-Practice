<?php

class student{
    public $name;
    public $id;

    function show_info(){
        echo "Student Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->id;
    }
}

$student1 = new student();
$student1->name = "Hab";
$student1->id = 1601222;
$student1->show_info();

?>