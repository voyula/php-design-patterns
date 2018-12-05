<?php

namespace DesignPatterns\Behavioral\Strategy;

interface CanSpeakInterface
{
    /**
     * @return string
     */
    public function talk(): string;
}
