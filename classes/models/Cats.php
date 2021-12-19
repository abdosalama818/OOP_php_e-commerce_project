<?php


class Cats extends DBcon{
    public function __construct()
    {
        $this->connect();
        $this->table_name="cats";
    }
}