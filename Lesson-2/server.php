<?php

//$url = $_GET['url'];
//header("Location: ".$_GET['url']);

switch ($_GET['url']) {
    case "https://yandex.ru":
        $isEmptyQuery = (empty($_GET['query'])) ? true : false;
        if (!$isEmptyQuery) {
            $url = "https://yandex.ru/search/?text=" . $_GET['query'];
            header("Location: $url");
        } else {
            header("Location: " . $_GET['url']);
        }
        break;
    default:
        header("Location: " . $_GET['url']);
}
