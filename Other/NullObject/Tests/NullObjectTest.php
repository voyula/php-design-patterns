<?php

namespace DesignPatterns\Other\NullObject\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Other\NullObject\Conference;

class NullObjectTest extends TestCase
{
    /**
     * @return void
     */
    public function testNullObject(): void
    {
        $conference = new Conference;

        $speaker = $conference->prepareSpeaker('Human');
        $this->assertSame('Hello! I am a human.', $speaker->speak('Hello! I am a human.'));

        $speaker = $conference->prepareSpeaker('Dog');
        $this->assertNull($speaker->speak('Hello! I am a dog.'));
    }
}
