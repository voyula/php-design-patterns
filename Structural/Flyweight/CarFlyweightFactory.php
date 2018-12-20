<?php

namespace DesignPatterns\Structural\Flyweight;

class CarFlyweightFactory
{
    /**
     * @var Car[]
     */
    private $cars = [];

    /**
     * @param string $name
     *
     * @return Car
     */
    public function make(string $name): Car
    {
        if (!isset($this->cars[$name])) {
            $this->cars[$name] = new Car($name);
        }

        return $this->cars[$name];
    }
}
