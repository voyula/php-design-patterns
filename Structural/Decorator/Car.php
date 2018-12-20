<?php

namespace DesignPatterns\Structural\Decorator;

class Car implements CarInterface
{
    /**
     * @var string
     */
    public $features;

    /**
     * @return void
     */
    public function setup(): void
    {
        $this->features = 'Diesel';
    }
}
