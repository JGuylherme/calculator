<?php

$firstNum = readline("What is the first number of the operation? ");
$secNum = readline("What is the second number of the operation? ");
$operator = readline("What is the operation sign (+, -, *, /)? ");
$result = 0;

switch ($operator) {
    case '+':
        $result = $firstNum + $secNum;
        break;
    case '-':
        $result = $firstNum - $secNum;
        break;
    case '*':
        $result = $firstNum * $secNum;
        break;
    case '/':
        $result = $firstNum / $secNum;
        break;
    
    default:
        # code...
        break;
}

?>