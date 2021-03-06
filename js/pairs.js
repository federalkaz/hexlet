/*
Однажды вы сидели дома, когда курьер Василий принес вам коробку. С коробкой шла записка следующего содержания:

Коробка состоит из двух отсеков, в одном из которых пусто, а в другом лежит еще одна коробка, в которой также два отсека и точно также один отсек пустой, а в другом - коробка. Коробки могут быть вложены друг в друга сколько угодно раз. Вам нужно добраться до коробки, внутри которой нет вложенной коробки, и отдать ее курьеру.

Подчеркну, что во всех коробках, кроме той последней, в одном отсеке пусто, а в другом - всегда коробка, но никогда не две коробки одновременно и никогда не две пустоты. Сами отсеки при этом могут меняться, то есть в одной коробке пустым отсеком может быть первый, а в другой - последний.

Реализуйте рекурсивную функцию findPrimitiveBox, которая принимает на вход "коробку" (пару), находит внутри нее пару без вложенных пар (как описано выше) и возвращает наружу.

import { cons, car, cdr, toString } from 'hexlet-pairs';

const pair = cons(
  null,
  cons('one', 'two'),
);
toString(findPrimitiveBox(pair)); // ('one', 'two')

const pair2 = cons(
  cons(null, cons(1, 5)),
  null,
);
toString(findPrimitiveBox(pair2)); // (1, 5)
Подсказки
Выполняйте практику строго по порядку (по шагам): от простых упражнений к более сложным.
Функция isPair из библиотеки hexlet-pairs проверяет, является ли переданный ей параметр парой. Более подробное описание функции смотрите в документации библиотеки (файл hexlet-pairs.md в каталоге docs).
Функцию toString из библиотеки hexlet-pairs можно использовать (при необходимости) для отладки решений.
 */


function reversePair(pair)
{
    return cons(cdr(pair), car(pair));
}

function sumOfPairs(pair1, pair2)
{
    return cons(car(pair1) + car(pair2), cdr(pair1) + cdr(pair2));
}

function findPrimitiveBox(pair)
{
    function iter(pair)
    {

        if ((isPair(car(pair)) === false) && (isPair(cdr(pair)) === false)) {
            return (pair);
        } else {
            if (car(pair) !== null) {
                return iter(car(pair));
            } else {
                return iter(cdr(pair));
            }
        }
        /*
        const first = car(pair);
        const last = cdr(pair);

        if (!isPair(first) && !isPair(last)) {
          return pair;
        }

        const next = isPair(first) ? first : last;
        return findPrimitiveBox(next);
        */
    }

    return iter(pair);
}
