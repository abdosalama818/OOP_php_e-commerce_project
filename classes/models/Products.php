<?php


class Products extends DBcon{
    public function __construct()
    {
        $this->connect();
        $this->table_name="products";
    }


    public function selectId($id,$column="products.*" ){
        $qry="SELECT $column FROM $this->table_name JOIN cats ON $this->table_name.cat_id = cats.id WHERE $this->table_name.id=$id";
        $rslt = mysqli_query($this->con,$qry);
        return mysqli_fetch_assoc($rslt);

    }



    public function selectAll($column = "*"):array{
        $qry="SELECT $column FROM $this->table_name JOIN cats ON $this->table_name.cat_id = cats.id 
        ORDER BY $this->table_name.id DESC";
        $rslt = mysqli_query($this->con,$qry);
        return mysqli_fetch_all($rslt,MYSQLI_ASSOC);}

}