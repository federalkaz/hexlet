<?php

$string = 'hello, wOrLD!  ';

function stringWordCount($string)
{
    //Обрезаем пробелы
    $string = trim($string);
    //Разбиваем строку на массивы
    $array = explode(' ', $string);
    //Берём последний элемент массива (слово)
    $newArray = array_pop($array);

    return strlen($newArray);
}

echo stringWordCount($string);