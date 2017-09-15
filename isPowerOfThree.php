<?php

function isPowerOfThree($num)
{
    if ($num / 3 % 3 ) {//поделить число на 3 и результат деления должен быть целочисленным
        return true;
    } else {
        return false;
    }
}

echo isPowerOfThree(4);