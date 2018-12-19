<?php

namespace DesignPatterns\Other\Delegation\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Other\Delegation\Delegator;

class DelegationTest extends TestCase
{
    /**
     * @return void
     */
    public function testDelegator(): void
    {
        $delegator = new Delegator;
        $this->assertEquals('Mail sent: example@example.com', $delegator->send('example@example.com'));
    }
}
