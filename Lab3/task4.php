<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>task 4</title>
</head>
<body>
<h2>Перестановка слов в обратном порядке</h2>
<?php

if(isset($_GET['text'])) {
    $string = $_GET['text'];


    $explode_string = explode(" ", $string);
    $count_array = count($explode_string);
    $out_string = "";
    for ($i = 0; $i = $count_array; $i++) {
        $count_array--;
        $out_string .= $explode_string[$count_array] . " ";
    }
    echo "<br>" . $out_string;
}else
    echo "Enter a string";
?>
</body>
</html>
