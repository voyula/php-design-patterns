<?php

namespace DesignPatterns\Behavioral\State;

class StateDone implements StateInterface
{
    public function proceedToNext(OrderContext $context)
    {
        // there is nothing more to do
    }

    public function toString(): string
    {
        return 'done';
    }
}
