<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class FuelLevel extends CarStatus
{
    public function check(Car $car)
    {
        if ($car->fuel != 'OK') {
            echo "Fuel Level is not OK.\n";
        } else {
            echo "Fuel Level is OK.\n";
        }

        $this->runNext($car);
    }
}
