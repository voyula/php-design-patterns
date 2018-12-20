<?php

namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    private $memento;

    public function __construct($memento)
    {
        $this->memento = $memento;
    }

    public function getMemento()
    {
        return $this->memento;
    }
}
