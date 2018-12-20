<?php

namespace DesignPatterns\Structural\Bridge;

class EngineBridge
{
    public $engine;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function set(EngineInterface $engine)
    {
        $this->engine = $engine;
    }
}
