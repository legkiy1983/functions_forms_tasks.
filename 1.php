<form action="1.php" method="post">
    <label for="one"></label>
    <textarea id="one" name="area1" rows="5" cols="30"></textarea><br>
    <label for="two"></label>
    <textarea id="two" name="area2" rows="5" cols="30"></textarea><br>
    <input type="submit" value="Сравнить!" name="sub">
</form>


<?php

function getCommonWords($a, $b)
{
    $first = explode(" ", $a);
    $second = explode(" ", $b);
    $result = array_intersect($first, $second);
    // Здесь можно было бы использовать функцию implode, но в задании сказано, что на выходе должен быть массив.
    return $result;
}

if (!empty($_POST['area1']) && !empty($_POST['area2']) && $_POST['sub'] == true) {
    echo '<pre>';
    print_r(getCommonWords($_POST['area1'], $_POST['area2']));
    echo '</pre>';
}

?>