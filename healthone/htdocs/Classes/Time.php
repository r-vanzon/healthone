<?php

class Time
{
    public $open_time;
    public $day;
    public $close_time;
    public $id;
    public function __construct()
    {
         settype($this->id, 'integer');
    }
}