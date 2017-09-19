const point = makePoint(1, 5);

export function quadrant(point)
{

    if (getX(point) > 0 && getY(point) > 0) {
        return 1;
    } else if (getX(point) < 0 && getY(point) > 0) {
        return 2;
    } else if (getX(point) < 0 && getY(point) < 0) {
        return 3;
    } else if (getX(point) > 0 && getY(point) < 0) {
        return 4;
    } else {
        return null;
    }

}

export function symmetricalPoint(point)
{

    return makePoint(- getX(point), - getY(point));

}

export function distance(point1, point2)
{

    return Math.sqrt(((getX(point2) - getX(point1)) * (getX(point2) - getX(point1)) + (getY(point2) - getY(point1)) * (getY(point2)- getY(point1)));

}