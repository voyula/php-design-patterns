<?php

namespace DesignPatterns\Behavioral\Strategy;

class Adapter
{
    private $can_speak;

    public function __construct(CanSpeakInterface $can_speak)
    {
        $this->can_speak = $can_speak;
    }

    /**
     * @return string
     */
    public function executeStrategy(): string
    {
        return 'Said: ' . $this->can_speak->talk();
    }
}
