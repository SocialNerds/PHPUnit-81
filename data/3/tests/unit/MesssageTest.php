<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{

    public function testMessageModel()
    {
        $authorMock = $this->createMock(\App\User::class);
        $authorMock->method('save')
          ->willReturn(uniqid());
        $authorMock->method('id')
          ->willReturn(uniqid());
        $recipientMock = $this->createMock(\App\User::class);
        $recipientMock->method('save')
          ->willReturn(uniqid());
        $recipientMock->method('id')
          ->willReturn(uniqid());

        $title = 'This is a new title';
        $text = 'This is the main body text.';
        $message = new \App\Message($title, $text, $authorMock, $recipientMock);

        $this->assertTrue($message->getTitle() == $title);
        $this->assertTrue($message->getText() == $text);
        $this->assertTrue($message->getAuthor()->id() == $authorMock->id());
        $this->assertTrue($message->getRecipient()->id() == $recipientMock->id());
    }

}
