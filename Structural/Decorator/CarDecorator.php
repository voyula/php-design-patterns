<?php

namespace DesignPatterns\Structural\Decorator;

abstract class CarDecorator implements CarInterface
{
    /**
     * @var CarInterface
     */
    protected $car;

    /**
     * @param CarInterface $car
     */
    public function __construct(CarInterface $car)
    {
        $this->car = $car;
    }

    abstract public function setup(): void;
}
