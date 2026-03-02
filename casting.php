<?php
//casting 
$intnum=34;
$fnum=9.7;
$a="100";
$x=0;


//convering step

$int_cov=(int)$fnum;
$f_cov=(float)$intnum;
$str_cov=(string)$intnum;
$bool_cov=(bool)$x;
$i_cov=(int)$a;
$array_cov=(array)$intnum;
$obj_cov=(object)$array_cov;


//output

echo "Integer to Float: " . $int_cov . "<br>";
echo "Float to Integer: " . $f_cov . "<br>";
echo "Integer to String: " . $str_cov . "<br>";
echo "Integer to Boolean: " . ($bool_cov ? 'true' : 'false') . "<br>";
echo "String to Integer: " . $i_cov . "<br>";
echo "Integer to Array: ";
print_r($array_cov);
echo "<br>";
echo "Array to Object: ";
print_r($obj_cov);

?>