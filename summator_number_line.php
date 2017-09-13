<?php

function addDigits($num)
{

    function iter($num)
    {
        $num = array_sum(str_split($num));
        if ($num < 10) {
            return $num;
        }
        return iter($num);
    }

    if ($num < 10) {
        return $num;
    }

    return iter($num);
}

echo addDigits(1555);