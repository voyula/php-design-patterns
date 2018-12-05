<?php

namespace DesignPatterns\Behavioral\Strategy;

class Dog implements StrategyInterface
{
    /**
     * @return string
     */
    public function talk(): string
    {
        return 'I am a dog.';
    }
}
