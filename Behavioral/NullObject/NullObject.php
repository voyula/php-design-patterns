<?php

namespace DesignPatterns\Behavioral\NullObject;

class NullObject implements SpeakerInterface
{
    /**
     * @param string $speech
     *
     * @return void
     */
    public function speak(string $speech): void
    {
    }
}
