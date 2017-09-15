<?php

function reverseInt($num)
{
    $arr = strsplit($num);

    if ($arr[0] === '-') {
        for ($i = strlen($num); $i > 0 ; $i--) {
            $res [] = $arr[$i];
        }


    } else {

    }
}