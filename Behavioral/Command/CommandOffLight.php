<?php

namespace DesignPatterns\Behavioral\Command;

class CommandOffLight implements CommandInterface
{
    public $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        return $this->light->off();
    }
}
