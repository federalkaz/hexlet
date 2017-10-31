<?php


function bestAttempt($first, $second)
{
    $result = zip($first, $second, function ($result1, $result2) {
        if ($result1['scored'] > $result2['scored']) {
            return $result1['name'];
        } else if ($result1['scored'] < $result2['scored']) {
            return $result2['name'];
        } else if ($result1['scored'] == $result2['scored']) {
            return null;
        }
    });

    $result2 = array_filter($result, function ($var) {
        return !is_null($var);
    });

    return array_values($result2);
}