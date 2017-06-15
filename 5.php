<?php
function getDirElements($a, $b){
    if ($op = opendir($a)) {
        echo "Записи: <br>";
        while (false !== ($res = readdir($op))) {
            if ($res != '.' && $res != '..' && $res == $b) {
                echo "$res <br>";
            }
        }
    }

}
getDirElements('test_directory_for_task4', 'test_file3.php');