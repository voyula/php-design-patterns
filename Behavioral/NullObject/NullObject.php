<?php

namespace DesignPatterns\Behavioral\NullObject;

class NullObject implements SpeakerInterface
{
    /**
     * @return void
     */
    public function speak($speech): void
    {
    }
}
