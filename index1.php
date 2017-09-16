<?php

function addDigits($str)
{



    function iter($num)
    {

        for ($i = strlen($num)-1; $i >= 0; $i--) {
            $arr[$i] = $num[$i];
        }

        $sum = array_sum($arr);
        if ($sum < 10) {
            return $sum;
        }

        return iter($sum);
    }

    return ;
}