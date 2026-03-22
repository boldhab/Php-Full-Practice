<?php

$num=67;
$counter=0 ;

for($i=1;$i<=$num;$i++){
    if ($num%$i==0){
        $counter=$counter + 1;
    }
}

if ($counter==2){
    echo "number is prime";
} else{
    echo "number is not prime";
}

?>