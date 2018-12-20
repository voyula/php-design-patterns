<?php

namespace DesignPatterns\Creational\Prototype;

class Dog extends Prototype
{
    /**
     * @var string
     */
    public $name = 'Chris';

    public function __clone()
    {
    }
}
