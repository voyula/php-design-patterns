<?php

namespace DesignPatterns\Creational\FactoryMethod;

class FlowerFactory
{
    /**
     * @return Rose
     */
    public function createRose(): Rose
    {
        return new Rose;
    }
}
