<?php

function evenSquareSum($arr)
{
    $filtered_arr = array_filter($arr, function ($item) {
        return $item % 2 === 0;
    });

    $result = array_map(function ($item) {
        return $item ** 2;
    }, $filtered_arr);

    return array_sum($result);
}
