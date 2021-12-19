<?php


class OrderDetails extends DBcon{
    public function __construct()
    {
        $this->connect();
        $this->table_name="orders_details_product";
    }
}