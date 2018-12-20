<?php

namespace DesignPatterns\Creational\Prototype;

class Cat extends Prototype
{
    /**
     * @var string
     */
    public $name = 'Patrick';

    public function __clone()
    {
    }
}
