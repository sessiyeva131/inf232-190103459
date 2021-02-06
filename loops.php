<?php

//while loop
$i = 10;
while($i < 20){
    echo $i;
    $i++;
}

//do-while loop
$a = 0;
do{
    echo $a;
    $a++;
}while($a < 10);

//for loop
for($x = 0; $x <= 10; $x++){
    echo "The number is: $x <br>";
}

$students = array("s1" => 19, "s2" => 20, "s3" => 21);
foreach($students as $key => $value){
    echo $value + 2;
    echo $key;
}
?>