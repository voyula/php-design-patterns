<?php

namespace DesignPatterns\Behavioral\Memento;

class Customizer
{
    /**
     * @var Car
     */
    private $car;

    /**
     * @param Car $car
     */
    public function __construct(Car $car)
    {
        $this->car = $car;
    }

    /**
     * @return Memento
     */
    public function copy(): Memento
    {
        return new Memento(clone $this->car);
    }

    /**
     * @param Memento $memento
     *
     * @return void
     */
    public function restore(Memento $memento): void
    {
        $this->car = $memento->getCar();
    }

    /**
     * @param string $color
     *
     * @return void
     */
    public function changeColor($color): void
    {
        $this->car->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->car->color;
    }
}
