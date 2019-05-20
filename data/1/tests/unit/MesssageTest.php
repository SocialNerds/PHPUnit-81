<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{

    public function testMessageModel()
    {
        $title = 'This is a new title';
        $text = 'This is the main body text.';
        $authorId = 2;
        $recipientId = 5;
        $message = new \App\Message($title, $text, $authorId, $recipientId);
        $this->assertTrue($message->getTitle() == $title);
        $this->assertTrue($message->getText() == $text);
        $this->assertTrue($message->getAuthorId() == $authorId);
        $this->assertTrue($message->getRecipientId() == $recipientId);
    }

}
