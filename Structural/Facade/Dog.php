<?php

namespace DesignPatterns\Structural\Facade;

class Dog
{
    /**
     * @return void
     */
    public function feed(): string
    {
        return 'Thanks! ' . __CLASS__ . PHP_EOL;
    }
}
