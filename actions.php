<?php

$Number_1 = $_POST['Number_1'];
$Number_2 = $_POST['Number_2'];
$action = $_POST['action'];

switch ($action){
    case "+":
        $answer = $Number_1 + $Number_2;
        break;

    case '-':
        $answer = $Number_1 - $Number_2;
        break;

    case '*':
        $answer = $Number_1 * $Number_2;
        break;

    case '/':
        $answer = $Number_1 / $Number_2;
        break;
    default:
        echo 'Операция не поддерживается';
}
echo 'Ответ: ' . $answer;



