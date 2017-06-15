<?php
error_reporting(0);
copy($_FILES['myfile']['tmp_name'],"gallery/".basename($_FILES['myfile']['name']));
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Photo gallery</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            background-color: beige;
        }

        #theForm{
            width: 320px;
            height: 150px;
            margin: 30px auto;
            background-color: antiquewhite;
            text-align: center;
            border: 3px solid #E9967A;
        }

        #sub{
            margin-top: 15px;
        }
        
        #gal{
            margin-top: 50px;
            margin-left: -300px;
            width: 700px;
            height: auto;
        }
    </style>
</head>
<body>
<div id="theForm">
    <form action="6.php" method="post" enctype="multipart/form-data">
        <h3>Выберите фото для загрузки:</h3>
        <label for="idown"></label>
        <input id="idown" name="myfile" type="file" required multiple><br><br>
        <input id="sub" type="submit" value="Загрузить!">
    </form>

<?php
error_reporting(E_ALL & -E_NOTICE);
$dir = 'gallery/';
$cols = 3;
$files = scandir($dir);

echo '<div id="gal">';
echo '<table>';
$k = 0;
for ($i = 0; $i < count($files); $i++) {
    if (($files[$i] != '.') && ($files[$i] != '..')) {
        if ($k % $cols == 0) echo "<tr>";
        echo '<td>';
        $path = $dir . $files[$i];
        echo "<a href='$path'>";
        echo "<img src='$path' alt='' width='300' />";
        echo "</a>";
        echo "</td>";
        if (($k + 1) % $cols == 0 || ($i + 1) == count($files)) echo '</tr>';
        $k++;
    }
}
echo '</table>';
echo '</div>';
?>




</div>
</body>
</html>