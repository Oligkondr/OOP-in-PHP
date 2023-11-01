<?php

namespace Unit12;

class Segment
{
    private $beginPoint;
    private $endPoint;

    public function __construct($beginPoint, $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function __toString(): string
    {
        return "[{$this->beginPoint}, {$this->endPoint}]";
    }
}