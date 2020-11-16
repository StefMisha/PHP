<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="result.php">
        <input type="text" name="a">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="b">
        <input type="submit" value="Посчитать">
        <hr>

    </form>
</body>
<?

echo '<br><a href="' . $_SERVER['HTTP_REFERER'] . '" >Ссылка</a><br />'; 

?>

</html>