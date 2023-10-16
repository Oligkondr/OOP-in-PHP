<?php

namespace App\SegmentFunctions;

use App\Segment;

function reverse(Segment $segment): Segment
{
    return new Segment(clone $segment->endPoint, clone $segment->beginPoint);
}