<?php

//indexed arrays
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[1];

//associative arrays: key => value
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "25");
echo $age["Ben"];

//multidimensional arrays
$car = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13)
);
echo $car[0][0]. ": In stock: " .$car[0][1].", sold: " .$car[0][2];

//sort functions: sort(), rsort(), asort(), ksort(), arsort(), krsort()
sort($cars);
var_dump($cars); 
?>