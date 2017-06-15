<?php
error_reporting(0);
$get_text = $_POST['text'];

function refFirstLetter($var)
{
    $result = '';
    $mas = explode('.', $var);
    foreach ($mas as $key => $value) {
        $value = trim($value);
        if ($key != count($mas) - 1) {
            $result .= mb_strtoupper(mb_substr($value, 0, 1)) . mb_substr($value, 1) . ". ";
        }
        }
    return $result;
    }


?>

<form action="11.php" method="post">
    <textarea name="text" cols="40" rows="6">
    </textarea><br>
    <input type="submit" value="Отформатировать!">
</form>

<?php
echo refFirstLetter($get_text);
?>