<?php

use function Functional\map;

$arr = [[1,[2,3],4],5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

function iter2($value) {

    function iter($value, $newArr)
    {
        if ($value === null) return null;
        if (is_array($value)) {
            foreach ($value as $value2) {
                $newArr[] = $value2;
            }
        } else {
            $newArr[] = $value;
        }
        return iter($value,$newArr);
    }

    return iter($newArr = []);
}

print_r(iter2($arr));

//НЕ ЗАКОНЧЕНО