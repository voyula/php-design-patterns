<?php

namespace DesignPatterns\Behavioral\Mediator;

class Dog extends Colleague
{
    /**
     * @return string
     */
    public function message(): string
    {
        return 'Hav hav: ' . $this->mediator->getNameOfCat();
    }
}
