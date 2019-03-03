<?php

namespace DesignPatterns\Structural\FluentInterface;

class Employee
{
    private $name;
    private $surname;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    public function __toString()
    {
        $employeeInfo = 'Name: ' . $this->name . PHP_EOL;
        $employeeInfo .= 'Surname: ' . $this->surname . PHP_EOL;
        $employeeInfo .= 'Salary: ' . $this->salary . PHP_EOL;

        return $employeeInfo;
    }
}
