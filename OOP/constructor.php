<?php
class  student{
public $name;
public $id;
public $age;
 function __construct($name,$id,$age){
   $this->name=$name;
   $this->age=$age;
   $this->id=$id;

 }

 function show_info(){
    echo " this student learing now ";
    echo "Name: " , $this->name ,", Age: " , $this->age , ", ID: " , $this->id;
 }

}

$student1 =new student("Hab",1601222,30);
$student1->show_info();
     