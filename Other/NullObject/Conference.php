<?php

namespace DesignPatterns\Other\NullObject;

class Conference
{
    /**
     * @var string
     */
    private $speaker;

    /**
     * @param string $type
     *
     * @return SpeakerInterface
     */
    public function prepareSpeaker(string $type): SpeakerInterface
    {
        if ($type === 'Human') {
            return new Human;
        }

        return new NullObject;
    }
}
