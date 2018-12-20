<?php

namespace DesignPatterns\Other\MethodChaining;

class MethodChaining
{
    /**
     * @var string
     */
    public $hello;

    public function methodOne(): this
    {
        $this->hello .= 'H';
        return $this;
    }

    public function methodTwo(): this
    {
        $this->hello .= 'e';
        return $this;
    }

    public function methodThree(): this
    {
        $this->hello .= 'l';
        return $this;
    }

    public function methodFour(): this
    {
        $this->hello .= 'l';
        return $this;
    }

    public function methodFive(): this
    {
        $this->hello .= 'o';
        return $this;
    }
}
