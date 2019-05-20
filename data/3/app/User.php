<?php

namespace App;

class User
{

    protected $id;
    protected $name;
    protected $phone;
    protected $mail;

    public function __construct(string $name, string $phone, string $mail)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->mail = $mail;
    }

    /**
     * Get user id.
     *
     * @return int
     *   User id.
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * Get user name.
     *
     * @return string
     *   User name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get user phone.
     *
     * @return string
     *   User phone.
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Get user mail.
     *
     * @return string
     *   User mail.
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * Save user to DB.
     *
     * @return int
     *   User id.
     */
    public function save()
    {
        // Actually connecting to DB/ORM and saving.
        // Id returned from DB primary key.
        $this->id = uniqid();

        return $this->id();
    }

}