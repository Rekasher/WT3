<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Task 7</title>
</head>
<body>
<form method="post">
    <h3>Введите путь к каталогу</h3>
    Путь: <input type="text" name="your_path" required><br>
    <br><input type="submit" value="Ввести">
</form>

</body>
</html>

<?php

setcookie("visitedSites[5]", "http://192.168.159.129/labsVT/lab3/task7.php", 0, "/labsVT/Lab6", "192.168.159.129");

if(isset($_POST['your_path'])){
    $my_path = $_POST['your_path'];
    $array = getPath($my_path);

    echo "<table>";
    echo "<tr><td>Путь</td><td>Размер</td><td>Последняя модификация</td><td>Последнее обращение</td><td>Расширение</td></tr>";

    if (is_array($array)){
        foreach($array as $el){
            echo "<tr><td>$el</td><td>".round((filesize($el))/1024,2)." Кбайт</td><td>".date('d.m.Y H:i:s',filemtime($el))."</td><td>".date('d.m.Y H:i:s',fileatime($el))."</td><td>".(pathinfo($el,PATHINFO_EXTENSION))."</td></tr>";
        }

        echo "</table>";
        echo "<table>";
        echo "<br> Первые 100 символов текстовых файлов";
        foreach ($array as $el){
            if (pathinfo($el,PATHINFO_EXTENSION)==="txt"){
                echo "<tr><td>$el</td><td>".file_get_contents($el, FALSE, NULL, 0, 100)."</td>></tr>>";
            }
        }
        echo "</table>";
    } else echo "Такого пути не существует";
    echo "<br> Отношение объема графических файлов к общему объему всех файлов: ".getSize($my_path)."%<br>";
} else {
    echo '<br>Введите путь!';
}


function getPath($path) {
    if($path!==false && $path!='' && file_exists($path)){
        $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

        $files = array();
        foreach ($rii as $file)
            if (!$file->isDir()){
                $files[] = $file->getPathname();
            }
    } else return 0;
    return $files;
}

function getSize($path){
    $sizeAll = 0;
    $sizePic = 0;
    $proc = 0;
    $path = realpath($path);
    if($path!==false && $path!='' && file_exists($path)){
        foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object){
            $sizeAll += filesize($object);
            if (pathinfo($object,PATHINFO_EXTENSION)==="jpg" || pathinfo($object,PATHINFO_EXTENSION)==="png" ){
                $sizePic += filesize($object);
            }
        }
        $proc= round(($sizePic/$sizeAll)*100, 2, 1);
    }
    return $proc;
}
