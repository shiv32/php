<?php

$num1 = $argv[1] ?? 0;
$operator = $argv[2] ?? '+';
$num2 = $argv[3] ?? 0;

switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            echo "Cannot divide by zero";
        } else {
            echo $num1 / $num2;
        }
        break;
    default:
        echo "Invalid operator";
}
echo "\n";