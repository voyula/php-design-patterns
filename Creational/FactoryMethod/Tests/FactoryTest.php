<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\FactoryMethod\FlowerFactory;
use DesignPatterns\Creational\FactoryMethod\Rose;

class FactoryTest extends TestCase
{
    public function testFlowerFactory()
    {
        $rose = (new FlowerFactory)->createRose();
        $this->assertInstanceOf(Rose::class, $rose);
    }
}
