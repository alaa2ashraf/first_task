<?php 

$num1=10;
$num2=2;
$operator="%";
$message= "result is :";

    switch($operator){
        case "+":
        echo $message.($num1+$num2);
        break;
        case "-":
        echo $message.($num1-$num2);
        break;
        case "*":
        echo $message.($num1*$num2);
        break;
        case "/":
        echo $message.($num1/$num2);
        break;
        default: 
        echo "not correct operation!";
        
    }



?>