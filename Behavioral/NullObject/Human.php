<?php

namespace DesignPatterns\Behavioral\NullObject;

class Human implements SpeakerInterface
{
    /**
     * @param string $speech
     *
     * @return string
     */
    public function speak(string $speech): string
    {
        return $speech;
    }
}
