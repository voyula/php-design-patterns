<?php

namespace DesignPatterns\Creational\Builder;

class DoctorBuilder implements PersonBuilderInterface
{
    private $person;

    public function __construct()
    {
        $this->person = new Person;
    }

    public function setGender(): void
    {
        $this->person->gender = Person::GENDER_FEMALE;
    }

    public function getResult(): Person
    {
        return $this->person;
    }
}
