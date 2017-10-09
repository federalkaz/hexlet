<?php
/*
function wordsCount($str)
{

    $arr = explode(' ',$str);
    foreach ($arr as $value){

        if ($value !== ' ' && $value !== ''){
            $test = substr_count($str,$value);
            $res[$value] = $test;
        }
    }
    echo '<pre>'.print_r($res).'</pre>';
    return $arr;

}
*/


function wordsCount($str)
{

    $arr = explode(' ',$str);

    $res1 = array_count_values($arr);

    foreach ($res1 as $key => $value){
        if ($key !== ''){
            $res[$key] = $value;
        }
    }

    echo '<pre>'.print_r($res).'</pre>';
    return $res;

}

echo wordsCount('   Dd Aa cc Dd a Dd    ');