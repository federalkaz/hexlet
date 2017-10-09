<?php

function isPowerOfThree($num)
{
    if ($num === 1) return true;
    if (($num % 3) !== 0) {//поделить число на 3 и результат деления должен быть целочисленным
        return true;
    } else {
        return false;
    }
}

echo isPowerOfThree(1);