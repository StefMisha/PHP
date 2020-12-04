<?php
if (empty($_GET)) {
    return 'Ничего не передано!';
}
if (empty($_GET['operation'])) {
    return 'Не передана операция';
}

if (empty($_GET['a']) || empty($_GET['b'])) {
    if (empty($_GET['operation'] == '/')) {
        return 'Не переданы все аргументы';
    }
    return 'Деление на 0';
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
        $result = $a / $b;;
        break;
    case '^':
        // $result = $a ** $b;

        $result = 1;
        for ($i = 0; $i < $b; $i++) {
            $result *= $a;
        }
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;

echo '<br><a href="' . $_SERVER['HTTP_REFERER'] . '" >Назад</a><br />';
