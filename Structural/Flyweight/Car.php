<?php

namespace DesignPatterns\Structural\Flyweight;

class Car
{
    /**
     * @var string
     */
    public $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
