<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class OilPressure extends CarStatus
{
    public function check(Car $car)
    {
        if ($car->oil != 'OK') {
            echo "Oil Pressure is not OK.\n";
        } else {
            echo "Oil Pressure is OK.\n";
        }

        $this->runNext($car);
    }
}
