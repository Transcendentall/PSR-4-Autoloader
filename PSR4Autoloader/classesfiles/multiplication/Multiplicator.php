<?php

namespace Mathematica\multiplication;

class Multiplicator
{
    private int $a;
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function mult()
    {
        echo "Multiplication (a * b) | ", $this->a, " * ", $this->b, " = ";
        return $this->a * $this->b;
    }
}
?>