<?php

namespace DesignPatterns\Structural\Bridge;

class Petrol implements EngineInterface
{
    public function run()
    {
        echo "Wroom! Wroom!\n";
    }
}
