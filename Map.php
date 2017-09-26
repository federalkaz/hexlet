<?php
/*
    Реализуйте map используя итеративный процесс.
    Подсказки:
    Функция reverse переворачивает список. Она доступна в скрипте.
 */
function map($func, $list)
{
    // BEGIN (write your solution here)
    function iter($func, $list)
    {
        if ($list == null) {
            return null;
        }
        return iter($func($list));
    }
    // END
}
