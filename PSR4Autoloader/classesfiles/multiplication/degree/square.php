<?php

namespace Mathematica\multiplication\degree;

class Square
{
    private int $a;
    public function __construct(int $a)
    {
        $this->a = $a;
    }
    public function sq()
    {
        echo "Square (degree 2) (a ^ 2) | ", $this->a, " ^ 2 = ";
        return $this->a * $this->a;
    }
}
?>