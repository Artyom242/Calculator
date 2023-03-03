<?php
$number_1 = $_POST['number_1'];
$number_2 = $_POST['number_2'];
$action = $_POST['action'];

switch ($action){
    case "+":
        $answer = $number_1 + $number_2;
        break;

    case '-':
        $answer = $number_1 - $number_2;
        break;

    case '*':
        $answer = $number_1 * $number_2;
        break;

    case '/':
        $answer = $number_1 / $number_2;
        break;
    default:
        echo 'Операция не поддерживается';
}
echo 'Ответ: ' . $answer;



