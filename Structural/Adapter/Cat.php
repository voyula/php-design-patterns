<?php

namespace DesignPatterns\Structural\Adapter;

class Cat
{
    /**
     * @var int
     */
    private $age;

    /**
     * @param int $age
     */
    public function __construct(int $age)
    {
        $this->age = $age;
    }
}
