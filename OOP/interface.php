<?php
interface vehicle {
    public function move();
}

class machine {
    public function start(){
        echo "Machine starting...<br>";
    }
}

class car extends machine implements vehicle {
    public function move(){
        echo "Car is moving...<br>";
    }

    public function stop(){
        echo "Car stopped.<br>";
    }
}

$mycar = new car();
$mycar->start();
$mycar->move();
$mycar->stop();
?>