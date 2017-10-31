<?php

function isPowerOfThree($num)
{
    /*
    if ($num === 1) return 'Yes (1)';
    if ((sqrt($num) % ) === 0) {//поделить число на 3 и результат деления должен быть целочисленным
        return 'Yes';
    } else {
        return 'No';
    }
    */
    $count = 0;
    //Возвращаем кол-во троек
    while ($num > 2) {
        $num -= 3;
        $count++;
    }
    echo $count.PHP_EOL;


}

echo isPowerOfThree(18);