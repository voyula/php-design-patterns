<?php

namespace DesignPatterns\Creational\Builder;

class PersonDirector
{
    public function build(PersonBuilderInterface $builder)
    {
        $builder->setGender();

        return $builder->getResult();
    }
}
