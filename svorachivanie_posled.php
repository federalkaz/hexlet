<?php

function product($num1, $num2, $func)
{
    if ($num1 == $num2) {
        return $num2;
    }
    return $func(product($num1, $num2 - 1, $func), $num2);
}