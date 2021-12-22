<?php


class OrderDetails extends DBcon{
    public function __construct()
    {
        $this->connect();
        $this->table_name="orders_details_product";
    }
    public function selectWith($orderId){
        $qry="SELECT $this->table_name.qty,products.price AS prodPrice,products.name As prodName FROM $this->table_name Join products 
        ON $this->table_name.product_id = products.id
         where $orderId = orders_id";
        $rslt = mysqli_query($this->con,$qry);
        return mysqli_fetch_all($rslt,MYSQLI_ASSOC);
    }

    
}