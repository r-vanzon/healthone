<?php

class Login
{
    public $id;
    public $email;
    public $password;
    public $name;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}