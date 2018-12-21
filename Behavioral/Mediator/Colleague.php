<?php

namespace DesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    /**
     * @var MediatorInterface
     */
    private $mediator;

    /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}
