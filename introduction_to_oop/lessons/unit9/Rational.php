<?php

namespace Unit9;

class Rational
{
    public int $numer;
    public int $denom;

    public function __construct($numer, $denom)
    {
        $this->numer = $numer;
        $this->denom = $denom;
    }

    public function getNumer(): int
    {
        return $this->numer;
    }

    public function getDenom(): int
    {
        return $this->denom;
    }

    public function add(Rational $rational): Rational
    {
        $denom = $this->denom * $rational->denom;
        $numer = $this->numer * $rational->denom + $rational->numer * $this->denom;
        return new Rational($numer, $denom);
    }

    public function sub(Rational $rational): Rational
    {
        $denom = $this->denom * $rational->denom;
        $numer = $this->numer * $rational->denom - $rational->numer * $this->denom;
        return new Rational($numer, $denom);
    }
}