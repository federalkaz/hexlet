<?php
function solution($list)
{
    $r1 = map(function ($item) {
        return ceil($item);
    }, $list);

    $r2 = filter(function ($item) {
        return $item % 2 === 0;
    }, $r1);

    $r3 = reduce(function ($item, $acc) {
        return $acc * $item;
    }, $r2, 1);

    return $r3;
}