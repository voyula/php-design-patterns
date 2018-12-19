<?php

namespace DesignPatterns\Behavioral\Strategy\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Strategy\Adapter;
use DesignPatterns\Behavioral\Strategy\Cat;
use DesignPatterns\Behavioral\Strategy\Human;
use DesignPatterns\Behavioral\Strategy\Dog;

class StrategyTest extends TestCase
{
    /**
     * @return void
     */
    public function testCatStrategy(): void
    {
        $strategy = new Adapter(new Cat);

        $this->assertSame('Said: I am a cat.', $strategy->getMessage());
    }

    /**
     * @return void
     */
    public function testHumanStrategy(): void
    {
        $strategy = new Adapter(new Human);

        $this->assertSame('Said: I am a human.', $strategy->getMessage());
    }

    /**
     * @return void
     */
    public function testDogStrategy(): void
    {
        $strategy = new Adapter(new Dog);

        $this->assertSame('Said: I am a dog.', $strategy->getMessage());
    }
}
