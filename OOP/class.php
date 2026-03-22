<?php

class student{
    public $name;
    public $id;

    function show_info(){
        echo " this student learing now ";
    }

}

$student1 =new student();
$student1->name= "Hab";
$student1->id=1601222;
$student1->show_info();


?>