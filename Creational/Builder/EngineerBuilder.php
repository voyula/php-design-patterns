<?php

namespace DesignPatterns\Creational\Builder;

class EngineerBuilder implements PersonBuilderInterface
{
    private $person;

    public function __construct()
    {
        $this->person = new Person;
    }

    public function setGender(): void
    {
        $this->person->gender = Person::GENDER_MALE;
    }

    public function getResult(): Person
    {
        return $this->person;
    }
}
