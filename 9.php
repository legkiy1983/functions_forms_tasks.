<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ABCDE</title>
</head>
<body>

<form action="9.php" method="post">
    <label for="one">Enter the text:</label>
    <input id="one" type="text" name="stroka"><br>
    <input type="submit" name="confirm" value="Отправить">
</form>

<?php
$str = $_POST['stroka'];
if (!empty($str)) {
    $var = strlen($str) - 1;
    $i = 0;
    while ($i < $var + 1) {
        echo $str[$var - $i];
        $i++;
    }
}else{
    echo 'ERROR!' . '<br>Please enter the text.';
}
?>

</body>
</html>