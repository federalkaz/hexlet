<?php
function cons($x, $y)
{
    return function ($func) use ($x, $y) {
        return $func($x, $y);
    };
}

function car(callable $pair)
{
    // BEGIN (write your solution here)
    return $pair(function ($first, $second) {
        return $first;
    });
    // END
}

function cdr(callable $pair)
{
    // BEGIN (write your solution here)
    return $pair(function ($first, $second) {
        return $second;
    });
    // END
}