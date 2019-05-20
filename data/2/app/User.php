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
        $this->id = uniqid();
        $this->name = $name;
        $this->phone = $phone;
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

}