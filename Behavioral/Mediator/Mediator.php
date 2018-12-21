<?php

namespace DesignPatterns\Behavioral\Mediator;

class Mediator
{
    /**
     * @var Cat
     */
    public $cat;
    /**
     * @var Dog
     */
    public $dog;

    public function __construct(Cat $cat, Dog $dog)
    {
        $this->cat = $cat;
        $this->dog = $dog;

        $this->cat->setMediator($this);
        $this->dog->setMediator($this);
    }

    /**
     * @return string
     */
    public function getNameOfCat(): string
    {
        return $this->cat->getName();
    }

    /**
     * @return string
     */
    public function getMessageDog(): string
    {
        return $this->dog->message();
    }
}
