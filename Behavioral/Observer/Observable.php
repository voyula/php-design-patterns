<?php

namespace DesignPatterns\Behavioral\Observer;

use SplSubject;
use SplObjectStorage;
use SplObserver;

class Observable implements SplSubject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var \SplObjectStorage
     */
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage;
    }

    /**
     * @param \SplObserver $observer
     *
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @param \SplObserver $observer
     *
     * @return void
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * @param string $new_name
     *
     * @return void
     */
    public function changeName(string $new_name): void
    {
        $this->name = $new_name;
        $this->notify();
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
