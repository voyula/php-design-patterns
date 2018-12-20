<?php

namespace DesignPatterns\Behavioral\Interpreter;

class GallonToLitre implements Converter
{
    private $gallon;

    public function __construct(int $gallon)
    {
        $this->gallon = $gallon;
    }

    public function show()
    {
        return round($this->gallon * 3.79);
    }
}
