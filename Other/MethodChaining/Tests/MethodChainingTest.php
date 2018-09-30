<?php

namespace DesignPatterns\Other\MethodChaining\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Other\MethodChaining\MethodChaining;

class MethodChainingTest extends TestCase
{
    /**
     * @var \DesignPatterns\Other\MethodChaining\MethodChaining
     */
    private methodChaining;
    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->methodChaining = new MethodChaining;
    }
    /**
     * @return void
     */
    public function testHello(): void
    {
        $this->methodChaining->methodOne()->methodTwo()->methodThree()->methodFour()->methodFive();
        $this->assertEquals('Hello', $this->methodChaining);
    }
}
