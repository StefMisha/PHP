<?php


function add($a, $b)
{
    return "Сумма $a + $b = " . $a = $a + $b;
}
echo add(1, 5) . "<br>";



function sub($a, $b)
{
    return "Вычетание $a - $b = " . $a = $a - $b;
}
echo sub(5, 1) . "<br>";

function mul($a, $b)
{
    return "Умножение $a * $b = " . $a * $b;
}
echo mul(5, 2) . "<br>";

function div($a, $b)
{
    if ($a == 0 || $b == 0) {
        return "Деление на 0";
    } else {
        return "Деление $a / $b = " . $a / $b;
    }
}
echo div(55, 5) . "<br>";
