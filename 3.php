<form action="3.php" method="post">
    <label for="a"></label>
    <input id="a" name="numb" type="number"><br>
    <input type="submit" value="Go!">
</form>


<?php


$the_file = implode(' ', file('3.txt'));

$file_str = explode(' ', $the_file);

$counter = count($file_str);

$x = $_POST['numb'];

for ($i=0; $i < $counter; $i++) { 
    
    if (strlen($file_str[$i]) > $x) {
        unset ($file_str[$i]);
    } else {
        $file_text_new = $file_str[$i].' ';
        $file = 'new_file.txt';
        file_put_contents($file, $file_text_new, FILE_APPEND);
        echo $file_text_new;
    }
}



?>