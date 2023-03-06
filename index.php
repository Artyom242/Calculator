<?php
$action = ['+'=>'Сложить','-'=>'Вычесть','*'=>'Умножить','/'=>'Разделить'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<h2>Введите числа и выберите знак</h2>
<form style="display: flex" action="/calculator/actions.php" method="post">
    <input type="number" name="numberOne">
    <select name="action">
         <?php foreach ($action as $key => $sign):?>
            <option value="<?=$key?>"><?=$sign?></option>
         <?php endforeach; ?>
    </select>
    <input type="number" name="numberTwo">
    <input type="submit" value="Отправить">
</form>
</body>
</html>

