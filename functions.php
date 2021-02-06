<?php
function test(){
    echo "OK";
}

//functions are not case-sensitive
TEST();
Test();

function printWord($w){
    echo $w;
}
$word = "Tomi";
print($word);

//Parameter type
function addNumbers(int $a, int $b){
    return $a + $b;
}

function addStrings(string $a, string $b){
    return $a + $b;
}

echo addNumbers(5, 6);
echo "<br>";
echo addStrings("4", "days");

//return type declarations
// declare(strict_types=1); <-- strict_types declaration must be the very first statement in the script 
function addNums(float $a, float $b) : float{
    return $a + $b;
}
echo addNums(1.2, 5.2);

//passing by the value
function addFive(&$n){
    $n += 5;
}

$n = 7;
addFive($n);
echo $n;
?>