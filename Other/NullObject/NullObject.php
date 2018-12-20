<?php

namespace DesignPatterns\Other\NullObject;

class NullObject implements SpeakerInterface
{
    /**
     * @return void
     */
    public function speak($speech): void
    {
    }
}
