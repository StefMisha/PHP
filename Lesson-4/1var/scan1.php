<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="class">
        <header>
            <div class="header"> Галерея</div>
        </header>

        <?php
        $files1 = scandir("images");
        $littleFilesCount = count($files1);

        $files2 = scandir("img");

        $littleFilesDivs = filesBuild($files1, $littleFilesCount);

        ?>
        <div class="top">
            <? renderFiles($littleFilesDivs); ?>
        </div>

</body>

<?php

function filesBuild($files, $filesCount)
{
    $filesArray = [];
    $i = 0;
    while ($i < $filesCount) {
        if ($i <= 1) {
            $i++;
            continue;
        }
        $filesArray[] = '<img src=images/' . $files[$i] . '>'; /*"<a href=full_image.php?img=$files[$i]<img src=images/= $files[$i]</a>"*/
        $i++;
    }

    return $filesArray;
}

function renderFiles($divs)
{
    foreach ($divs as $count => $div) {
        if ($count % 3 == 0) {
            echo "<hr>";
        }
        echo $div;
    }
}
?>
</div>

</html>