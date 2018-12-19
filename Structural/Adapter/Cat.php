<?php

namespace DesignPatterns\Structural\Adapter;

class Cat
{
    private $age;

    public function __construct(int $age)
    {
        $this->age = $age;
    }
}
