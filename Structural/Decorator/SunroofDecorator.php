<?php

namespace DesignPatterns\Structural\Decorator;

class SunroofDecorator extends CarDecorator
{
    /**
     * @return void
     */
    public function setup(): void
    {
        $this->car->setup();
        $this->car->features .= ', Sunroof';
        $this->features = $this->car->features;
    }
}
