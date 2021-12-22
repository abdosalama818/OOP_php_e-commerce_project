<?php


class Orders extends DBcon{
    public function __construct()
    {
        $this->connect();
        $this->table_name="orders";
    }

    public function selectAll($column = "*"):array{
        $qry="SELECT $column ,SUM(price * qty) AS total FROM  $this->table_name JOIN orders_details_product JOIN products ON
         $this->table_name.id = orders_details_product.orders_id AND
          orders_details_product.product_id = products.id GROUP BY  $this->table_name.id";
        $rslt = mysqli_query($this->con,$qry);
        return mysqli_fetch_all($rslt,MYSQLI_ASSOC);}



        public function selectId($id,$column="*" ){
            $qry="SELECT $column FROM $this->table_name JOIN orders_details_product JOIN products ON
            $this->table_name.id = orders_details_product.orders_id AND
             orders_details_product.product_id = products.id where $this->table_name.id=$id";
            $rslt = mysqli_query($this->con,$qry);
            return mysqli_fetch_assoc($rslt);
    
        }


}