<?php

$dir1 = "img";
$dir2 = "images";

$files1 = array_slice(scandir($dir1), 2);
$files2 = array_slice(scandir($dir2), 2);
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
                for ($i = 0; $i < count($files1); $i++) { ?>
                    <a rel="gallery" class="photo" href="<?= $dir2 . "/" . $files2[$i] ?>" target="_blank"><img src="<?= $dir1 . "/" . $files1[$i] ?>" alt="" /></a>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>