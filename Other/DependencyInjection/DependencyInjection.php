<?php

namespace DesignPatterns\Other\DependencyInjection;

use DateTime;

class DependencyInjection
{
    /**
    * @var \DateTime
    */
    private $dependency;

    /**
    * @return void
    */
    public function __construct(DateTime $dependency)
    {
        $this->dependency = $dependency;
    }

    /**
    * @return string
    */
    public function getTimezoneName(): string
    {
        return $this->dependency->getTimezone()->getName();
    }
}
