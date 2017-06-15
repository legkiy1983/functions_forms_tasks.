<?php
function myFunc($start)
{
    $toArr = explode(' ', $start);
    $var = array_unique($toArr);
    $res = count($var);
    return $res;
}
?>

<form action="10.php" method="post">
    <label for="a">Enter the words:</label>
    <input id="a" type="text" name="string"><br>
    <input type="submit" value="Get result">
</form>

<?php
if (!empty($_POST['string']))
echo 'Result: ' . myFunc($_POST['string']);
?>