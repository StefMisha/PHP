<?php

$outer = 2;

function sum($a=0,$b=0,$c){
    if(isEven($a) && isEven($b)){
        return $a + $b;
    }
    return $a * $b;
//    $res = ($a + $b) * $c;
//    echo $res."<hr>";
//    return $res;
//    echo "111";
    //return - это оператор, который завершает работу функции и присваивает ей значение
}

function isEven($x){
    return $x % 2 == 0;
}

$result = 2 * sum(1,4,0);
echo $result;

//sum(2,2,$outer);
