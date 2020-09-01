<?php

namespace Tests\Extensions;

use BotMan\Drivers\Facebook\Extensions\MediaAttachmentElement;
use BotMan\Drivers\Facebook\Extensions\MediaTemplate;
use Illuminate\Support\Arr;
use PHPUnit\Framework\TestCase;

class MediaTemplateTest extends TestCase
{
    /** @test */
    public function it_can_be_created()
    {
        $template = new MediaTemplate;
        $this->assertInstanceOf(MediaTemplate::class, $template);
    }

    /**
     * @test
     **/
    public function it_can_add_an_element()
    {
        $template = new MediaTemplate;
        $template->element(MediaAttachmentElement::create('video'));

        $this->assertSame('video', Arr::get($template->toArray(), 'attachment.payload.elements.0.media_type'));
    }
}
