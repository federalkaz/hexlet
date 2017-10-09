<?php

function hammingWeight($num)
{
    //$acc = 1;
    function delenie($num, $acc)
    {
        if ($num == 0) {
            //echo '1'.PHP_EOL;
            return $acc;
        }
        if ($num % 2 === 1) {
            $acc += 1;
            //echo '1'.PHP_EOL;
        } else {
            //echo '0'.PHP_EOL;
        }
        $num = floor($num / 2);
        return delenie($num, $acc);
    }

    return delenie($num, $acc = 0);
}

function hammingWeight2($num)
{
    return array_sum(str_split(decbin($num)));
}

echo 'Мой велосипед насчитал - '.hammingWeight(101).PHP_EOL;
echo 'С имеющимися функциями - '.hammingWeight2(101).PHP_EOL;
