<?php

echo mathOperation(55, 5, 'div'); //определение переменных

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'add':
            return add($arg1, $arg2);
            break;
        case 'mul':
            return mul($arg1, $arg2);
            break;
        case 'div':
            return div($arg1, $arg2);
            break;
    }
}

function add($arg1, $arg2)
{
    return "Сумма $arg1 + $arg2 = " . $arg1 = $arg1 + $arg2;
}

function mul($arg1, $arg2)
{
    return "Умножение $arg1 * $arg2 = " . $arg1 * $arg2;
}

function div($arg1, $arg2)
{
    if ($arg1 == 0 || $arg2 == 0) {
        return "Деление на 0";
    } else {
        return "Деление $arg1 / $arg2 = " . $arg1 / $arg2;
    }
}
