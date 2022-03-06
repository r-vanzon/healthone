<?php

class Review
{
    public $id;
    public $name;
    public $rating;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}