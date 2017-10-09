<?php

function fib($num)
{

    if ($num === 0) {
        return 0;
    }
    if ($num < 3) {
        return 1;
    } else {
        return fib($num-1) + fib($num-2);
    }

}