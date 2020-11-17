<?php
$result = require 'calc.php';
?>
<html>

<head>
    <title>Калькулятор</title>
</head>

<body>
    <b>Результат вычислений:</b>
    <br>
    <?= $result ?>
    <?

  echo '<br><a href="' . $_SERVER['HTTP_REFERER'] . '" >Ссылка</a><br />'; 
 
?>
</body>

</html>