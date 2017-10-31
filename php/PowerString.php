<?php

$result = map(str_split($str), function ($item) {
    return ord($item);
});

return array_sum($result);

function powerOfString($str)
{
    // BEGIN (write your solution here)
    $arr = str_split($str);
    foreach ($arr as $value) {
        $new_arr[] = ord($value);
    }
    return array_sum($new_arr);
    // END
}