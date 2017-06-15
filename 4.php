<?php
function getDirElements($a){
    if ($op = opendir($a)) {
        echo "Записи: <br>";
        while (false !== ($res = readdir($op))) {
            if ($res != '.' && $res != '..') {
                echo "$res <br>";
            }
        }
    }

}
getDirElements('test_directory_for_task4');