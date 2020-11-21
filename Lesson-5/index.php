<?php

include "config.php";

$sql = "select * from images";
$res = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="title">
        <h2>Галерея</h2>
    </div>
    <div id="content">
        <div class="gallery">
            <div class="gallery">
                <?php
                while ($data = mysqli_fetch_assoc($res)) { ?>

                    <a rel="gallery" class="photo" href="<?= $data['address'] . $data['name'] ?>" target="_blank">
                        <img src="<?= $data['address']  . $data['name']  ?>" alt="" /></a>

                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>