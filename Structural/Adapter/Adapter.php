<?php

namespace DesignPatterns\Structural\Adapter;

class Adapter
{
    private $cat;

    public function __construct(Cat $cat)
    {
        $this->cat = $cat;
    }

    /**
     * @return int
     */
    public function getAgeInformation(): int
    {
        return 'Age: ' . $this->cat->age;
    }
}
