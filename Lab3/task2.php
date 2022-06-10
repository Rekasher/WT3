<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task2</title>
</head>
<body>
<h2>Изменение текста</h2>
<?php
if (isset($_GET['text'])) {
    $arr_str = explode(" ", $_GET['text']);
    $i = 1;
    foreach ($arr_str as $value) {
        $chars = preg_split("//", $value, -1, 1);
        if (isset($chars[2])) {
            $chars[2] = "<span style='color:red;'>$chars[2]</span>";
        }
        $value = implode($chars);
        if ($i % 3 == 0) {
            $tmp[]= mb_strtoupper($value);
        } else $tmp[]= $value;
    $i++;
    }
    $str = implode(" ", $tmp);
    echo "$str";
} else echo "Enter a text";
?>
</body>
</html>
