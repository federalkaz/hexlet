function reverseInt(str)
{
    var flag = 0;
    // если число отрицательное, ставим флаг и берём число по модулю
    // преобразуем число в строку
    if (str < 0) {
        flag = 1;
        str = Math.abs(str);
    }
    str = String(str);
    // берём посимвольно строку и заносим в массив
    let arr = str.split('');
    // переворачиваем элементы массива
    arr.reverse();
    str = Number(arr.join(''));
    if (flag === 1) {
        str *= -1;
        return str;
    } else {
        return str;
    }
}