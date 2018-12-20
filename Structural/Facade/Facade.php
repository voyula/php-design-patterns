<?php

namespace DesignPatterns\Structural\Adapter;

class Facade
{
    /**
     * @return string
     */
    public function feedAll(): string
    {
        $cat = new Cat;
        $dog = new Dog;
        return $dog->feed() . $cat->feed();
    }
}
