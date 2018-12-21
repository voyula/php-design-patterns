<?php

namespace DesignPatterns\Behavioral\State;

class StateShipped implements StateInterface
{
    public function proceedToNext(OrderContext $context)
    {
        $context->setState(new StateDone());
    }

    public function toString(): string
    {
        return 'shipped';
    }
}
