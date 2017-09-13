<?php

function uniq($arr)
{

    $res = [];

    foreach ($arr as $value){
        if (in_array($value, $res)){
            continue;
        }
        $res[] = $value;
    }

    return print_r($res);

}

$arr = [1,1];


echo '<pre>'.print_r(uniq($arr)).'</pre>';