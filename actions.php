<?php
$numberOne = $_POST['number_1'];
$numberTwo = $_POST['number_2'];
$action = $_POST['action'];

switch ($action){
    case "+":
        $answer = $numberOne + $numberTwo;
        break;

    case '-':
        $answer = $numberOne - $numberTwo;
        break;

    case '*':
        $answer = $numberOne * $numberTwo;
        break;

    case '/':
        $answer = $numberOne / $numberTwo;
        break;
    default:
        echo 'Операция не поддерживается';
}
echo 'Ответ: ' . $answer;



