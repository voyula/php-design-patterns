<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Template
{
    private $salary = 4000;

    /**
     * @return string
     */
    public function getSalary(): string
    {
        return 'Salary: ' . $this->salary;
    }
}
