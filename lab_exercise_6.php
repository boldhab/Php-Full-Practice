<?php
$arr=array(13,5,7,2);
$min =$arr[0];
$max =$arr[0];


foreach($arr as $value){

    if ($value <$min){
        $min=$value;
    }
    if ($value > $max){
         $max=$value;
    }
    

}
echo "the minimum value of the array is: " . $min . "<br>";
echo "the maximum value of the array is: " . $max;


?>