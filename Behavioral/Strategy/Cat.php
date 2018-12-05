<?php

namespace DesignPatterns\Behavioral\Strategy;

class Cat implements StrategyInterface
{
    /**
     * @return string
     */
    public function talk(): string
    {
        return 'I am a cat.';
    }
}
