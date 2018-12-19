<?php

namespace DesignPatterns\Structural\Adapter\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Adapter\Cat;
use DesignPatterns\Structural\Adapter\Adapter;

class AdapterTest extends TestCase
{
    /**
     * @return void
     */
    public function testAdapter(): void
    {
        $cat = new Adapter(new Cat(5));
        $this->assertSame('Age: 5', $cat->getAgeInformation());
    }
}
