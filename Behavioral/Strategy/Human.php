<?php

namespace DesignPatterns\Behavioral\Strategy;

class Human implements StrategyInterface
{
    /**
     * @return string
     */
    public function talk(): string
    {
        return 'I am a human.';
    }
}
