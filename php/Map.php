<?php
/*
    Реализуйте map используя итеративный процесс.
    Подсказки:
    Функция reverse переворачивает список. Она доступна в скрипте.
 */

$iter = function ($list, $acc) use (&$iter, $func) {
    if ($list === null) {
        return reverse($acc);
    }

    return $iter(cdr($list), cons($func(car($list)), $acc));
};
return $iter($list, null);