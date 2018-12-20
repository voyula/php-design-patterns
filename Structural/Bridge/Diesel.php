<?php

namespace DesignPatterns\Structural\Bridge;

class Diesel implements EngineInterface
{
    public function run()
    {
        echo "Broom! Broom!\n";
    }
}
