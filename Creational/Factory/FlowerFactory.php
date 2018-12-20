<?php

namespace DesignPatterns\Creational\Factory;

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
