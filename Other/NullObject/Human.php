<?php

namespace DesignPatterns\Other\NullObject;

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
