<?php
echo "Задание №1 <br>";
$x = 0;
while ($x++ <= 100) {
    if ($x % 3 == 0) {
        echo  "$x ";
    }
}
?>

<hr>

<?
echo "Задание №2 <br>";
$x = 0;
do {
    if ($x == 0) {
        echo "$x - ноль ";
     } elseif ($x % 2 == 1) {
        echo "$x - нечетное число ";
    } else 
            {echo "$x - четное число ";
             }
    $x++;
}
while ($x <= 10)

?>
<hr>

<?
$reg = [
    "Московская область" => [
                        "Город" => ["Химки","Клин","Долгопрудный"]
    ],
    "Ставропольский край" => [
                        "Город" => ["Светлоград","Изобильный"],
    ],
     "Краснодарский край"  => [
                          "Город" => ["Анапа","Новоросcийск"],
   ]
];
     
foreach ($reg as $obl => $gor) {
    if (is_array($gor['Город'])) {
        $p = implode(", ", $gor['Город']);
    } else {
        $p = $gor['Город'];
    }
       echo "<br>$obl: <br> $p. ";
}

?>
<hr>

<?
echo "Задание №4 <br>";
$arr = ["а" => "a","б" => "b","в" => "v","г" => "g","д" => "d","е" => "e","ё" => "yo","ж" => "j","з" => "z"];
function trans($ru, $tr, $arr) {
    if ($pow > 1) { 
        return $val * power($val, $pow - 1);
    } else if($pow==0) {
        return $val=1;
    } else {
        return $val;
    }
 }
$ru = "абв";

echo $ru;



?>
<hr>

<? //перепроверить!!!
echo "Задание №5 <br>";
$name = 'Alex_Newton';
$name = str_replace(' ', '_', $name);
?>

<hr>

<?
echo "Задание №6 <br>";
$name = 'Lesson_№3';
$name = str_replace('_', ' ', $name);
echo $name;
?>

<hr>

<?
echo "Задание №7 <br>";

for ($i=0; $i < 10; print$i++) {};

?>