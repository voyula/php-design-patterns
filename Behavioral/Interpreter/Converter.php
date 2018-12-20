<?php

namespace DesignPatterns\Behavioral\Interpreter;

class Converter implements ConverterInterface
{
    private $g2l;
    private $m2k;

    public function __construct(ConverterInterface $g2l, ConverterInterface $m2k)
    {
        $this->g2l = $g2l;
        $this->m2k = $m2k;
    }

    public function show()
    {
        echo  $this->g2l->show() . "l/" . $this->m2k->show() . "k\n";
    }
}
