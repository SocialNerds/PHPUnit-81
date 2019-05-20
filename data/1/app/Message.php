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
     * Author id.
     *
     * @var int
     */
    protected $authorId;

    /**
     * Recipient id.
     *
     * @var int
     */
    protected $recipientId;

    /**
     * Message constructor.
     *
     * @param string $title
     * @param string $text
     * @param int $authorId
     * @param int $recipientId
     */
    function __construct(string $title, string $text, int $authorId, int $recipientId)
    {
        $this->title = $title;
        $this->text = $text;
        $this->authorId = $authorId;
        $this->recipientId = $recipientId;
    }

    /**
     * Get message title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get message text.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Get author id.
     *
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    /**
     * Get recipient id.
     *
     * @return int
     */
    public function getRecipientId(): int
    {
        return $this->recipientId;
    }

}