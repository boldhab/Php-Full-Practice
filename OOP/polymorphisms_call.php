<?php
class math_operations{
    public function __call($name, $arguments)
    {
       if ($name=="multiple"){
        $count=count($arguments);
        if ($count==2){
            return $arguments[0]*$arguments[1];
        }
        else if($count==3){
            return $arguments[0]*$arguments[1]*$arguments[2];
        }
        else{
            return "Invalid number of arguments";
        }
       }
    }
}
$math=new math_operations();
echo $math->multiple(2,3);      
echo $math->multiple(2,3,4);
echo $math->multiple(2,3,4,5);
?>