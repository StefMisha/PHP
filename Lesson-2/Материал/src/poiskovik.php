<?php
    $query = ["PHP с нуля", "jS для начинающих","Курс доллара на сегодня"];
    $size = count($query);//получаем длину массива
?>
<meta charset="utf-8">
<a href="server.php?url=https://yandex.ru&query=<?= $query[rand(0,$size-1)]?>">Перейти в Яндекс c параметром</a><br>
<a href="server.php?url=https://yandex.ru">Перейти в Яндекс</a><br>
<a href="server.php?url=https://google.com">Перейти в Google</a><br>
<a href="server.php?url=https://mail.ru">Перейти в Mail</a><br>