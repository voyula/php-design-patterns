<?php

namespace DesignPatterns\Behavioral\NullObject\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\NullObject\Conference;

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
        $this->assertNull('Hello! I am a dog.', $speaker->speak('Hello! I am a dog.'));
    }
}
