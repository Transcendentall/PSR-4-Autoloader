<?php

namespace Mathematica;
class Summator
{
    private int $a;
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function summ()
    {
        echo "Summ (a + b) | ", $this->a, " + ", $this->b, " = ";
        return $this->a + $this->b;
    }
}
?>