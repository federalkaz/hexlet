<?php

/*
Реализуйте функцию sortByBinary, которая сортирует переданную коллекцию и возвращает новую коллекцию.
Сортировка происходит следующим образом:

Сортируем по количеству единиц в бинарном представлении (порядок следования не важен).
Если количество единиц одинаково, то сортируем на основе десятичного представления.
Пример:

[1, 2, 4, 3] == sortByBinary([3, 4, 2, 1]);

decbin - в двоичное
bindex - в обычное
*/
function sortByBinary($collection)
{
    $result = fsort($collection, function ($left, $right) {
        $binleft = strlen(str_replace('0','',decbin($left)));
        $binright = strlen(str_replace('0','',decbin($right)));
        if($binleft == $binright){
            return bccomp($left,$right);
        }
        else{
            return strcasecmp($binleft,$binright);
        }
    });

    return $result;
}
