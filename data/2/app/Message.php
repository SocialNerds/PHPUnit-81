<?php

namespace App;

class Message
{

    /**
     * Message title.
     *
     * @var string
     */
    protected $title;

    /**
     * Message text.
     *
     * @var string
     */
    protected $text;

    /**
     * Author.
     *
     * @var User
     */
    protected $author;

    /**
     * Recipient.
     *
     * @var User
     */
    protected $recipient;

    function __construct(string $title, string $text, User $author, User $recipient)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
        $this->recipient = $recipient;
    }

    /**
     * Get message title.
     *
     * @return string
     */
    function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get message text.
     *
     * @return string
     */
    function getText(): string
    {
        return $this->text;
    }

    /**
     * Get message author.
     *
     * @return \App\User
     */
    function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * Get message recipient.
     *
     * @return \App\User
     */
    function getRecipient(): User
    {
        return $this->recipient;
    }

}