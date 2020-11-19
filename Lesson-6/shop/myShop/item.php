<?php
if (isset($_GET['id'])) {
    $id = (int)($_GET['id']);
}
include_once "../models/db_goods.php";
$good = goods_get($link, $id);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Интернет-магазин ноутбуков</title>
    <link rel="stylesheet" href="style/styles.css" type="text/css" media="all">
</head>

<body>


    <div class="item-content">
        <h2><?= $good['name'] ?></h2>
        <div class="img-big"><img src="<?= $good['src'] ?>" alt="<?= $good['name'] ?>" title="<?= $good['name'] ?>"></div>
        <div class="item_desc clearfix">
            <h3>Описание товара:</h3>
            <div class="short">
                <p><?= $good['description'] ?></p>
            </div>
            <div class="o-pay">
                <p class="price"><?= $good['price'] ?>р.</p>
                <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>
            </div>
        </div>
    </div>
    </div>

    </div>
</body>

</html>