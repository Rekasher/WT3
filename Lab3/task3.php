<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task3</title>
</head>
<body>
<form method="post">
    Числа 1<input type="text" name="num1" required><br>
    <br>Числа 2<input type="text" name="num2"required><br>
    <br><input type="submit" value="Вычислить">
</form>
<?php
if (isset($_POST['num1']) && isset($_POST['num2'])){
    $arr_num1=explode(" ",$_POST['num1']);
    $arr_num2=explode(" ",$_POST['num2']);
    $arr_add=array_diff($arr_num2,$arr_num1);
    $output= array_merge($arr_num1,$arr_add);
    $str=implode(" ",$output);
    $num1=implode(" ",$arr_num1);
    $num2=implode(" ",$arr_num2);
    echo "<br> Первый набор: $num1";
    echo "<br> Второй набор: $num2";
    echo "<br> Результат: $str";
}
?>
</body>
</html>

