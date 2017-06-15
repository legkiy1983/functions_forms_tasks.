<form action="2.php" method="post">
    <label for="area1"></label>
    <textarea id="area1" name="field1" rows="5" cols="25"></textarea><br>
    <input type="submit" value="Отправить!">
</form>

<?php

error_reporting(E_ALL & ~E_NOTICE);

$pos = $_POST['field1'];

function getLongestWords($var)
{
    $x = explode(" ", $var);
    usort($x, function ($a, $b) {
        return mb_strlen($b) - mb_strlen($a);
    }
    );
    print_r(array_slice($x, 0, 3));
}

if ($pos == true && !empty($pos)) {
    getLongestWords($pos);
}

?>