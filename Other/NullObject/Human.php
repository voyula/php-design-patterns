<?php

namespace DesignPatterns\Other\NullObject;

class Human implements SpeakerInterface
{
    /**
     * @param string $speech
     * @return string
     */
    public function speak(string $speech): string
    {
        return $speech;
    }
}
