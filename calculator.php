<?php

$firstNum = readline("What is the first number of the operation? ");
$secNum = readline("What is the second number of the operation? ");
$operator = readline("What is the operation sign (+, -, *, /)? ");
$result = null;

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
        echo "Insert a valid operational symbol";
        break;
}

if($result !== null){
echo "Result of the operation $firstNum $operator $secNum = $result";
}else {
    "Invalid result";
}

?>