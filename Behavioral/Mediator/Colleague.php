<?php

namespace DesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    /**
     * @var Mediator
     */
    private $mediator;

    /**
     * @param Mediator $mediator
     */
    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
