<?php

namespace DesignPatterns\Other\MethodChaining;

class MethodChaining
{
    public $hello;

    public function methodOne()
    {
        $hello .= 'H';
        return $this;
    }

    public function methodTwo()
    {
        $hello .= 'e';
        return $this;
    }

    public function methodThree()
    {
        $hello .= 'l';
        return $this;
    }

    public function methodFour()
    {
        $hello .= 'l';
        return $this;
    }

    public function methodFive()
    {
        $hello .= 'o';
        return $this;
    }
}
