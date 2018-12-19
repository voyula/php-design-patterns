<?php

namespace DesignPatterns\Behavioral\NullObject;

class Human implements SpeakerInterface
{
    /**
     * @return string
     */
    public function speak($speech): string
    {
        return $speech;
    }
}
