<?php

namespace DesignPatterns\Creational\Builder;

interface PersonBuilderInterface
{
    public function setGender();
    public function getResult();
}
