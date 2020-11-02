<?php
$outer = 2;

function sum($a = 0, $b = 0, $c)
{
    if (isEven($a) && isEven($b)) {

        return $a + $b;
    }
    return $a * $b;
    //  $res = ($a + $b) * $c;
    //  echo $res . "<hr>";
    //   return $res; //return - это оператор , который завершает работу функции и присваивает ей значение/ для того чтобы с функцией работаь дальше, нужно возвращать данные 
    //   echo "111";
}

function isEven($x)
{
    return $x % 2 == 0;
}



$res = 3 * sum(1, 4, 2); // переменные в функции и глобальные переменные хранят разные данные
echo $res;

//sum(2, 2, $outer);
