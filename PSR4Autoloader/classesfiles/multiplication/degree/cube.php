<?php

namespace Mathematica\multiplication\degree;

class Cube
{
    private int $a;
    public function __construct(int $a)
    {
        $this->a = $a;
    }
    public function cub()
    {
        echo "Cube (degree 3) (a ^ 3) | ", $this->a, " ^ 3 = ";
        return $this->a * $this->a * $this->a;
    }
}
?>