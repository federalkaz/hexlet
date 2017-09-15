<?php

function factorial($num)
{
    // BEGIN (write your solution here)
    $iter = function ($num) use (&$iter)
    {

        if ($num === 1 || $num === 0) {
            return 1;
        }

        return $num * $iter($num-1);
    };

    return $iter($num);
    // END
}