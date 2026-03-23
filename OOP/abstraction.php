<?php

abstract class Shape {
    public $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    abstract function area(); 

    function display(){
        echo "This is a shape.<br>";
    }
}

class Circle extends Shape {
    public function area(){
        return $this->radius * $this->radius * 3.14;
    }
}

$circle = new Circle(3);
$circle->display();
echo "Area of circle: " . $circle->area();

?>