<?php

namespace DesignPatterns\Creational\Factory\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Factory\FlowerFactory;
use DesignPatterns\Creational\Factory\Rose;

class FactoryTest extends TestCase
{
    public function testFlowerFactory()
    {
        $rose = (new FlowerFactory)->createRose();
        $this->assertInstanceOf(Rose::class, $rose);
    }
}
