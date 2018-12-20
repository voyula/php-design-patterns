<?php

namespace DesignPatterns\Structural\Facade;

class Cat
{
    /**
     * @return void
     */
    public function feed(): string
    {
        return 'Thanks! ' . __CLASS__ . PHP_EOL;
    }
}
