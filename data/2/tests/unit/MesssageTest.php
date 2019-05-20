<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{

    public function testMessageModel()
    {
        $name = 'Thanos';
        $mail = 'thanos@socialnerds.gr';
        $phone = '6945345663';
        $author = new \App\User($name, $mail, $phone);

        $name = 'Nokas';
        $mail = 'nokas@socialnerds.gr';
        $phone = '6945345623';
        $recipient = new \App\User($name, $mail, $phone);

        $title = 'This is a new title';
        $text = 'This is the main body text.';
        $message = new \App\Message($title, $text, $author, $recipient);

        $this->assertTrue($message->getTitle() == $title);
        $this->assertTrue($message->getText() == $text);
        $this->assertTrue($message->getAuthor()->id() == $author->id());
        $this->assertTrue($message->getRecipient()->id() == $recipient->id());
    }

}
