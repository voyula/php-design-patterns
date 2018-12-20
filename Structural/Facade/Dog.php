<?php

namespace DesignPatterns\Structural\Facade;

class Dog
{
    /**
     * @return string
     */
    public function feed(): string
    {
        return 'Thanks! ' . __CLASS__ . PHP_EOL;
    }
}
