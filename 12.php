<?php
function reverse($str)
{
    $arr = explode('.', $str);
    $res = array_reverse($arr);

    foreach ($res as $value) {
        if ($value == '')
            continue;
        echo $value . '. ';
    }
}

reverse('А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.');