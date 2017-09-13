<?php

function reverse($str)
{

    $res = '';

    for ($i = strlen($str)-1; $i >= 0; $i--){
        $res .= $str{$i};
    }

    return $res;

}

echo reverse('hello, world!');