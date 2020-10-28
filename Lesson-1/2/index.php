<h1>Заголовок</h1>
<?php
echo "<h2>Hello word! Сегодня " . date("d.m.Y") . "</h2>";
?>
<p>Номер дня недели <?= date("W") ?> </p>
<br>
<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>

<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";
?>

<br>
<?php
$a = 4;
$b = 5;
echo $a * $b . '<br>';
?>
<?php
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a . '<br>';
$a = 0;
echo $a++ . '<br>';     // Постинкремент
echo ++$a . '<br>';    // Преинкремент
echo $a­­-- . '<br>';     // Постдекремент
?>
<?php
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно
?>
<?php
$a = 4;
$b = '4';
var_dump($a == $b);
var_dump($a === $b);
?>

<hr>