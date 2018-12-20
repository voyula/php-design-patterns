<?php

namespace DesignPatterns\Other\MethodChaining;

class MethodChaining
{
    /**
     * @var string
     */
    public $hello;

    public function methodOne(): MethodChaining
    {
        $this->hello .= 'H';
        return $this;
    }

    public function methodTwo(): MethodChaining
    {
        $this->hello .= 'e';
        return $this;
    }

    public function methodThree(): MethodChaining
    {
        $this->hello .= 'l';
        return $this;
    }

    public function methodFour(): MethodChaining
    {
        $this->hello .= 'l';
        return $this;
    }

    public function methodFive(): MethodChaining
    {
        $this->hello .= 'o';
        return $this;
    }
}
