<?php

namespace DesignPatterns\Structural\Facade;

class Cat
{
    /**
     * @return string
     */
    public function feed(): string
    {
        return 'Thanks! ' . __CLASS__ . PHP_EOL;
    }
}
