<?php

function toRna($str)
{

     $iter = function(&$symbol)
    {

        if ($symbol === 'G') {
            return 'C';
        } elseif ($symbol === 'C') {
            return 'G';
        } elseif ($symbol === 'T') {
            return 'A';
        } elseif ($symbol === 'A') {
            return 'U';
        } else {
            return 1;
        }

    };

    $arr[] = str_split($str);

    array_walk($arr, $iter);

    return var_dump($arr);

}

echo toRna('ACGTGGTCTTAA');