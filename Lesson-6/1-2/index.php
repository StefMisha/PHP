<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор № 1</title>
</head>

<body>
    <form action="result.php">
        <input type="number" style="width: 50px" name="a">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="^">^</option>
        </select>
        <input type="number" style="width: 50px" name="b">
        <input type="submit" value="=">
    </form>

    <hr><br>

    <form action="result.php">
        <input type="number" style="width: 50px; margin: 0  0 0 53px;" name="a">
        <input type="number" style="width: 50px" name="b">
        <br>
        <input type="submit" name="operation" value="+" style="margin: 10px;">
        <input type="submit" name="operation" value="-" style="margin: 10px;">
        <input type="submit" name="operation" value="*" style="margin: 10px;">
        <input type="submit" name="operation" value="/" style="margin: 10px;">
        <input type="submit" name="operation" value="^" style="margin: 10px;">
    </form>
</body>
<?

echo '<br><a href="' . $_SERVER['HTTP_REFERER'] . '" >Назад</a><br />'; 

?>

</html>