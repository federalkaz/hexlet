/*
Сумма квадратов первых десяти натуральных чисел это 12 + 22 + 32 + ... + 10 2 = 385.

Квадрат суммы первых десяти натуральных чисел это (1 + 2 + 3 + ... + 10)2 = 552 = 3025.

Разница между квадратом суммы и суммой квадратов первых десяти натуральных чисел: 3025 − 385 = 2640.

Напишите функцию sumSquareDifference, которая принимает аргумент n и возвращает разницу между квадратом суммы и суммой квадратов первых n натуральных чисел.
 */

function sumSquareDifference(n)
{
    function kvadratSummi(n)
    {
        if (n === 1) {
            return 1;
        } else {
            return Math.pow(n,2) + kvadratSummi(n - 1);
        }
    }

    function summaKvadratov(n)
    {
        if (n === 1) {
            return 1;
        } else {
            return n + summaKvadratov(n-1);
        }
    }

    return Math.pow(summaKvadratov(n),2) - kvadratSummi(n);
}