<?php


class Orders extends DBcon{
    public function __construct()
    {
        $this->connect();
        $this->table_name="orders";
    }
}