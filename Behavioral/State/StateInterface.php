<?php

namespace DesignPatterns\Behavioral\State;

interface StateInterface
{
    public function proceedToNext(OrderContext $context);

    public function toString(): string;
}
