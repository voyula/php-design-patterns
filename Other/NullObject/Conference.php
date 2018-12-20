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
    public function prepareSpeaker($type): SpeakerInterface
    {
        if (in_array($type, ['Human'])) {
            return new $type;
        }

        return new NullObject;
    }
}
