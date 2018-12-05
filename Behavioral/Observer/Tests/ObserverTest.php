<?php

namespace DesignPatterns\Behavioral\Observer\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Observer\{
    Observer,
    Observable
};

class ObserverTest extends TestCase
{
    /**
     * @return void
     */
    public function testObserver(): void
    {
        $observer = new Observer;

        $observable = new Observable;
        $observable->attach($observer);
        $observable->changeName('Observable');

        $this->assertCount(1, $observer->getChangedObservables());
    }
}
