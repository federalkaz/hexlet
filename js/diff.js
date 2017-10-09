/*
Напишите функцию diff, которая принимает два угла (integer), каждое от 0 до 360, и возвращает наименьшую разницу между ними.

Примеры:

diff(0, 45) === 45;         // не 315, а 45, потому что 45 меньше
diff(0, 180) === 180;
diff(0, 190) === 170;       // не 190, а 170, потому что 170 меньше
diff(120, 280) === 160;
 */

function diff(one, two)
{
    // оба угла в правой части
    if ((one <= 180) && (two <= 180)) {
        // Находим больший и отнимаем от него меньший - возвращаем результат
        if (two > one) {
            return two - one;
        } else {
            return one - two;
        }
        // первый угол в правой части, второй в левой
    } else if ((one <= 180) && (two > 180)) {
        // находим нижний угол
        let bottom = 180 - one + two - 180;
        // находим верхний угол
        let top = one + 360 - two;
        // сравниваем углы и возвращаем наименьший
        if (top < bottom) {
            return top;
        } else {
            return bottom;
        }
        // второй угол в правой части, первый в левой
    } else if ((two <= 180) && (one > 180)) {
        // находим нижний угол
        let bottom = 180 - two + one - 180;
        // находим верхний угол
        let top = two + 360 - one;
        // сравниваем углы и возвращаем наименьший
        if (bottom < top) {
            return bottom;
        } else {
            return top;
        }
        // оба угла в левой части
    } else if ((one > 180) && (two > 180)) {
        //Находим больший и отнимаем от него меньший - возвращаем результат
        if (two > one) {
            return two - one;
        } else {
            return one - two;
        }
    }
}

const diff = (a, b) => {
    const angle = Math.abs(a - b);
    const difference = angle > 180 ? 360 - angle : angle;
    return difference;
};