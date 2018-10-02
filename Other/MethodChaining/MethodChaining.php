<?php

namespace DesignPatterns\Other\MethodChaining;

class MethodChaining
{
    public $hello;

    public function methodOne()
    {
        $this->hello .= 'H';
        return $this;
    }

    public function methodTwo()
    {
        $this->hello .= 'e';
        return $this;
    }

    public function methodThree()
    {
        $this->hello .= 'l';
        return $this;
    }

    public function methodFour()
    {
        $this->hello .= 'l';
        return $this;
    }

    public function methodFive()
    {
        $this->hello .= 'o';
        return $this;
    }
}
