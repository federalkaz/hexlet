<?php

function smallestDivisor($num)
{
    // BEGIN (write your solution here)
    $delitel = function ($num, $n = 2) use (&$delitel)
    {
        if ($num === 1) {
            return 1;
        }
        if ($num % $n === 0) {
            return $n;
        }

        return $delitel($num, $n+1);
    };

    return $delitel($num);
    // END
}