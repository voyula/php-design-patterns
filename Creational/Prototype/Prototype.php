<?php

namespace DesignPatterns\Creational\Prototype;

abstract class Prototype
{
    /**
     * @var string
     */
    public $name = 'Candy';

    abstract public function __clone();
}
