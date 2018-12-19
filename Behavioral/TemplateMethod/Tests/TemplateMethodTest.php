<?php

namespace DesignPatterns\Behavioral\TemplateMethod\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\TemplateMethod\Employee;
use DesignPatterns\Behavioral\TemplateMethod\Boss;

class TemplateMethodTest extends TestCase
{
    /**
     * @return void
     */
    public function testTemplateMethod(): void
    {
        $employee = new Employee;
        $this->assertSame('Salary: 4000', $employee->getSalary());

        $boss = new Boss;
        $this->assertSame('Salary: 1000000', $boss->getSalary());
    }
}
