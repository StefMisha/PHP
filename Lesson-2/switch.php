<?php

//$svetophor = ["red", "yellow", "green"];
//
//$color =  $svetophor[rand(0, 2)]; //случайный рандомный цвет

$color = $_GET['color'];

echo "\$x={$_GET['x']}<br>";
echo "У светофора горит цвет $color <br>";


switch ($color) {
    case 'red':
        echo " Стоп<br>";
        break;
    case 'green':
        echo " Вперед<br>";
        break;
    case 'yellow':
        echo " Внимание<br>";
        break;
    default:
        echo " Поломка светофора<br>";
        break;
}
