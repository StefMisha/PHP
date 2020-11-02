<?php
/*
$day = date("w"); //4

if ($day > 0 && $day < 6) {
    echo "Будний день";
} elseif ($day == 6 || $day == 0) {
    echo "Выходной день";
} else {
    echo "Денб указан некорректно!";
}

*/

$x = 10;
$check = true;

if ($x >= 10) {
    ++$x;
    if ($x < 10) {
        $x++;
    } else {
        if (100) {
            if ("test") {
                $x *= 2;
            }
            $x += 2;
        }
        if (!$check) {
            $x = 10;
        } else {
            $x++;
        }
    }
}
echo $x++;
