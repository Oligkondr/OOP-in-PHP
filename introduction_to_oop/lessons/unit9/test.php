<?php

namespace Unit9;

require_once './Rational.php';

$rat1 = new Rational(3, 9);
var_dump($rat1);
var_dump($rat1->getNumer());
var_dump($rat1->getDenom());

$rat2 = new Rational(10, 3);

$rat3 = $rat1->add($rat2);
var_dump($rat3->getNumer());
var_dump($rat3->getDenom());

$rat4 = $rat1->sub($rat2);
var_dump($rat4->getNumer());
var_dump($rat4->getDenom());

