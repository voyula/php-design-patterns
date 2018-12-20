<?php

namespace DesignPatterns\Behavioral\Command;

class Light
{
    /**
     * @return string
     */
    public function on(): string
    {
        return 'on';
    }

    /**
     * @return string
     */
    public function off(): string
    {
        return 'off';
    }
}
