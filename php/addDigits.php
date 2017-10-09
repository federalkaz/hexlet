<?php

function addDigits($num)
{

    function iter($num)
    {
        if ($num < 10) {
            return $num;
        }
        $num = array_sum(str_split($num));
        return iter($num);
    }

    return iter($num);
}

echo addDigits(555);