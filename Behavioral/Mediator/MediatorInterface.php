<?php

namespace DesignPatterns\Behavioral\Mediator;

interface MediatorInterface
{
    /**
     * @return string
     */
    public function getNameOfCat(): string;

    /**
     * @return string
     */
    public function getMessageDog(): string;
}
