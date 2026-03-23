<?php
class areacalculator{
    public function area($length,$width=null){
        if($width==null){
            return $length*$length;
        }
        else{
            return $length*$width;
        }

    }
}
$area=new areacalculator();
$result=$area->area(5);
echo "Area of square: ".$result."\n";
$result=$area->area(5,10);
echo "Area of rectangle: ".$result."\n";
?>  