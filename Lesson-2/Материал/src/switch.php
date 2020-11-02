<?php

//$svetophor = ["red","yellow","green"];
//
//$color = $svetophor[rand(0,2)];//случайный цвет

echo "\$x={$_GET['x']}<br>";
$color = $_GET['color'];

echo "У светофора горит цвет $color<br>";

switch($color){
    case "red":
        echo "Стоп";
        break;
    case "green":
        echo "Вперед";
        break;
    case "yellow":
        echo "Внимане";
        break;
    default:
        echo "Поломка светофора";
}