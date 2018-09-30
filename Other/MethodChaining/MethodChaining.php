<?php

namespace DesignPatterns\Other\MethodChaining;

class MethodChaining
{
    public $hello;

    public function method1()
    {
        $hello .= 'H';
        return $this;
    }

    public function method2()
    {
        $hello .= 'e';
        return $this;
    }

    public function method3()
    {
        $hello .= 'l';
        return $this;
    }

    public function method4()
    {
        $hello .= 'l';
        return $this;
    }

    public function method5()
    {
        $hello .= 'o';
        return $this;
    }
}
