<?php

namespace DesignPatterns\Behavioral\State;

class StateCreated implements StateInterface
{
    public function proceedToNext(OrderContext $context)
    {
        $context->setState(new StateShipped());
    }

    public function toString(): string
    {
        return 'created';
    }
}
