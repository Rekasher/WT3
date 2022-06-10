<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task1</title>
</head>
<body>
<h2>Сортировка списка городов</h2>
<?php
setcookie("visitedSites[3]", "http://192.168.159.129/labsVT/lab3/task1.php", 0, "/labsVT/Lab6", "192.168.159.129");
if (isset($_GET['text'])) {
    $arr_str = explode(" ", $_GET['text']);
    $i = 0;
    sort($arr_str);
    $arr_out=array_unique($arr_str);
    $str = implode(" ", $arr_out);
    echo "$str";
} else echo "Enter a text";
?>
</body>
</html>
