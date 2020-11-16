<?php
if (empty($_GET)) {
    return 'Ничего не передано!';
}


if (empty(($_GET['a']) || empty($_GET['b']) || ($_GET['operetion'] != '*' || $_GET['operetion'] != '-' || $_GET['operetion'] != '+'))) {
    return 'Не переданы аргументы';
} elseif () { //проверку делать по числу, и провписать передачу именно чисел в index, потом проверка, если не равно 0
    # code...
}


$a = $_GET['a'];
$b = $_GET['b'];

$expression = $a . ' ' . $_GET['operation'] . ' ' . $b . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $a + $b;
        break;
    case '-':
        $result = $a - $b;
        break;
    case '*':
        $result = $a * $b;
        break;
    case '/':
        if ($a == 0 || $b == 0) {
            return "Деление на 0";
        } else {
            return $result = $a / $b;;
        }
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;
