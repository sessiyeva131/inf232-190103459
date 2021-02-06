<?php 
//if else statement
$grade = 57;
if($grade <= 100 and $grade >= 90){
    echo "Excellent";
} elseif ($grade <= 89 and $grade >= 70){
    echo "Good";
} else {
    echo "Satisfactory";
}

//switch
$color = "blue";

switch($color){
    case "red": 
        echo "Your color is red";
        break;
    case "blue":
        echo "Your color is blue";
        break; 
    case "green":
        echo "Your color is green";
        break; 
    default: echo "Your color is neither red, blur, nor green";
}

?>