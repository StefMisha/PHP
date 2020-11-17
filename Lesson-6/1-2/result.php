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

  echo '<br><a href="' . $_SERVER['HTTP_REFERER'] . '" >Назад</a><br />'; 
 
?>
</body>

</html>