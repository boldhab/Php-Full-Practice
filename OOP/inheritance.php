<?php
class car{
    public $speed;
    protected $color;
    private $engine;

    function __construct($speed,$color,$engine){
        $this->speed = $speed;
        $this->color = $color; // fixed
        $this->engine = $engine;
    }

    function info(){
        echo "this is information about the car";
    }
}

class volvo extends car{
    function display(){
        echo "I am Volvo";
    }
}

$myvolvo = new volvo(200, "red", "V8");
$myvolvo->display();
$myvolvo->info(); // inherited
?>