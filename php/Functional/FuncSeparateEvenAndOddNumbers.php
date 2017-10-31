<?php

/*
 * Реализуйте функцию separateEvenAndOddNumbers, которая принимает на вход массив чисел и возвращает массив,
 * в котором первый элемент - это массив четных чисел, а второй элемент - это массив нечетных чисел,
 * полученных из исходного массива.
 */

function separateEvenAndOddNumbers($collection)
{
    //even - чётные, odd - нечётные
    return list($even,$odd) = partition($collection, function ($item) {
        if ($item % 2 === 0) {
            return true;
        } else {
            return false;
        }
    });
}

function separateEvenAndOddNumbers($numbers)
{
    return partition($numbers, function ($num) {
        return $num % 2 == 0;
    });
}