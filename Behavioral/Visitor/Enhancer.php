<?php

namespace DesignPatterns\Behavioral\Visitor;

class Enhancer
{
    /**
     * @param Car $car
     *
     * @return string
     */
    public function enhance(Car $car): string
    {
        return "Metallic $car->color";
    }
}
