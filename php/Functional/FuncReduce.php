<?php

function wordsCount($arr)
{
    $result = array_reduce($arr, function ($acc, $item){

        if (!array_key_exists($item, $acc)) {
            $acc[$item] = 1;
        } else {
            $acc[$item]++;
        }
        return $acc;

    }, []);
    return $result;
}