<?php
include_once "../models/db_goods.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class=" top">
        <div class="container top_box">
            <ul class="header">
                <li><a href="index.php"><img src="img/logo.svg" alt="index"></a></li>
                <li><a href="contacts.php"><img src="img/contacts.svg" alt="contacts"></a></li>
            </ul>
            <div class="top_info">
                <h1 class="top_heading">New Automation Tool for Your</h1>
                <p class="text top_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum minus iste
                    pariatur
                    tempore doloremque
                    ipsum blanditiis aliquid earum eligendi, quaerat vel odio qui laborum? A facilis ab fugiat explicabo
                    ratione.</p>
                <a href="#" class="top_button">See Our Project</a>
            </div>
        </div>
    </div>
    <div class="what-we-do container">
        <h3 class="heading">What we do to help our client grow in digital era</h3>
    <div class="flex">
        <div class="card-box">
        <?php
        $goods = goods_all($link);
        if($goods){
            foreach ($goods as $good){?>
                <div class="card">
                    <a href="item.php?id=<?=$good['id']?>"><img class="card_img" src="<?=$good['small_src']?>" alt="<?=$good['name']?>" title="<?=$good['name']?>"></a>
                    <h3 class="item-name"><a class="card_link" href="item.php?id=<?=$good['id']?>"><?=$good['name']?></a></h3>
                    <p class="price"><?=$good['price']?>р.</p>
                    <p class="card_link"><a href="#" title="Добавить в корзину">Купить</a></p>
                </div>
               <? if ($k % $cols == 0) {
                    echo "<div class=\"card-box\"><br></div>";
                }
                $k++;
            }
            echo "";
            ?>
            <?}
        
        ?>
    </div>
        </div>
    </div>
    <div class="project container">
        <h3 class="heading">Lorem, ipsum dolor.</h3>
        <p class="text text_project">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ratione fuga
            error atque sed voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="project_item">
            <img class="project_img" src="img/project-1.png" alt="photo ">
            <p class="project_text">Smart Home Installation</p>
        </div>
        <div class="project_parent">
            <div class="project_item project_item_margin">
                <img class="project_img " src="img/project-2.png" alt="photo ">
                <p class="project_text project_text_mini">Sparklite App</p>
            </div>
            <div class="project_item ">
                <img class="project_img" src="img/project-3.png" alt="photo ">
                <p class="project_text project_text_mini">Car-Rapetition App</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container footer_con">
            <div class="footer_top">
                <div>
                    <h1 class=" footer_heading">
                        Interested to work with out team?</h1>
                    <p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
                <a class="footer_button" href="#">Let’s Talk</a>
            </div>
        </div>
        <hr>
        <div class="container footer_con">
            <div class="footer_bottom">
                <ul class="footer_info">
                    <li class="footer_list"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li class="footer_list footer_list2">+7-812-7313-4321</li>
                    <li class="footer_list footer_list3">hello.site@gmail.com</li>
                </ul>

                <p class="prava">2020 All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>