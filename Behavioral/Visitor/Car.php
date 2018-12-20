<?php

namespace DesignPatterns\Behavioral\Visitor;

class Car
{
    /**
     * @var string
     */
    public $color = 'Silver';

    /**
     * @param Enhancer $enhancer
     *
     * @return void
     */
    public function visitor(Enhancer $enhancer): void
    {
        $this->color = $enhancer->enhance($this);
    }
}
