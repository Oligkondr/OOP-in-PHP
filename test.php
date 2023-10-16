<?php
class Test
{
    public $a;
}

$a1 = new Test();
$a2 = clone $a1;
$a1->a = 'Aaaa!!!';
var_dump($a1, $a2, $a1 == $a2, $a1 === $a2);