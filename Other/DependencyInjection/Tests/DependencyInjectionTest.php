<?php

namespace DesignPatterns\Other\DependencyInjection\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Other\DependencyInjection\DependencyInjection;
use DateTime;
use DateTimeZone;

class DependencyInjectionTest extends TestCase
{
    /**
     * @var \DesignPatterns\Other\DependencyInjection\DependencyInjection
     */
    private dependencyInjection;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->dependencyInjection = new DependencyInjection(new DateTime(null, new DateTimeZone('Europe/London')));
    }

    /**
     * @return void
     */
    public function testDependencyInjection(): void
    {
        $this->assertEquals('Europe/London', $this->dependencyInjection->getTimezoneName());
    }
}
