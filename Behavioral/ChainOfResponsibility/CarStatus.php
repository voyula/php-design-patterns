<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

abstract class CarStatus
{
    protected $next;

    public function setNext(CarStatus $next)
    {
        $this->next = $next;
    }

    public function runNext(Car $car)
    {
        if ($this->next) {
            $this->next->check($car);
        }
    }

    abstract public function check(Car $car);
}
