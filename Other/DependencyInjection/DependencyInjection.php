<?php

namespace DesignPatterns\Other\DependencyInjection;

use DateTime;

class DependencyInjection
{
    private $dependency;

    public function __construct(DateTime $dependency): void
    {
        $this->dependency = $dependency;
    }

    public function getTimezoneName(): string
    {
        return $this->dependency->getTimezone()->getName();
    }
}
