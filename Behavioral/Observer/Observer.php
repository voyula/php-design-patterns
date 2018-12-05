<?php

namespace DesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class Observer implements SplObserver
{
    /**
     * @var \SplSubject
     */
    private $changed_observables;

    /**
     * @param \SplSubject $subject
     *
     * @return void
     */
    public function update(SplSubject $subject): void
    {
        $this->observables[] = clone $subject;
    }

    /**
     * @return Observable[]
     */
    public function getChangedObservables(): array
    {
        return $this->changed_observables;
    }
}
