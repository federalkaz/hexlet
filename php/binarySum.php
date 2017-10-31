<?php

function binarySum($arg1, $arg2)
{
    return decbin(bindec($arg1) + bindec($arg2));
}

echo binarySum('1101', '101');