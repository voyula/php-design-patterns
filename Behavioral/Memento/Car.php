<?php

namespace DesignPatterns\Behavioral\Memento;

class Car
{
    /**
     * @var string
     */
    public $color;

    /**
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }
}
