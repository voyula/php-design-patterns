<?php

namespace DesignPatterns\Behavioral\Mediator;

class Cat extends Colleague
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Jack';
    }
}
