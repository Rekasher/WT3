<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>task 5</title>
    <h2>Изменение массива</h2>
    <style>
        th {
            background: #BCEBDD;
            color: black;
            padding: 10px 20px;
        }
        th, td {
            border-style: solid;
            border-width: 0 1px 1px 0;
            border-color: black;
        }
        table {
            width: 200px;
            font-size: 20px;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <?php
    $array = [[1.1,3.9473,3.12],
        ['abc','a','b'],
        [1,2,3]];
    echo "Исходный массив:";
    foreach($array as $line){
        foreach($line as $el){
            echo "<td>$el</td>";
        }
        echo '</tr>';
    }
    ?>
</table>
<table>
    <?php
    echo "<br> Результат:";
    foreach($array as $line){
        foreach($line as $el){
            if(filter_var($el, FILTER_VALIDATE_INT)){
                $el=$el*2;
            } else if(filter_var($el, FILTER_VALIDATE_FLOAT)){
                $el=round($el,2);
            }else $el=mb_strtoupper($el);
            echo "<td>$el</td>";
        }
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>
