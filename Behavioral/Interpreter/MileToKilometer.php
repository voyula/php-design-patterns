<?php

namespace DesignPatterns\Behavioral\Interpreter;

class MileToKilometer implements Converter
{
    private $mile;

    public function __construct(int $mile)
    {
        $this->mile = $mile;
    }

    public function show()
    {
        return round($this->mile * 1.6);
    }
}
