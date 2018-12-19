<?php

namespace DesignPatterns\Creational\Factory;

final class FlowerFactory
{
    /**
     * @return Rose
     */
    public function createRose(): Rose
    {
        return new Rose;
    }
}
