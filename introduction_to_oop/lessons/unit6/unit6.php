<?php

namespace Unit6;
function dup(Point $point1): Point
{
    $point2 = new Point();
    $point2->x = $point1->x;
    $point2->y = $point1->y;

    return $point2;
}
