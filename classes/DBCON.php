<?php

   
        abstract class DBcon {

            protected $table_name , $con;
            public function connect(){
               // $this->con = mysqli_connect(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);
                $this->con = mysqli_connect("localhost","root","","e-commerce");
                
        
            } 
            public function selectAll($column = "*"):array{
                $qry="SELECT $column FROM $this->table_name";
                $rslt = mysqli_query($this->con,$qry);
                return mysqli_fetch_all($rslt,MYSQLI_ASSOC);
        
            }
        
        
        
            public function selectId($id,$column="*" ){
                $qry="SELECT $column FROM $this->table_name where id=$id";
                $rslt = mysqli_query($this->con,$qry);
                return mysqli_fetch_assoc($rslt);
        
            }


            public function selectWhere($condition,$column="*"):array{
                $qry="SELECT $column FROM $this->table_name where $condition";
                $rslt = mysqli_query($this->con,$qry);
                return mysqli_fetch_all($rslt,MYSQLI_ASSOC);
            }

            public function insert($columns ,$values){
                $qry= "INSERT INTO $this->table_name ($columns) VALUES ($values)";
                return $rslt = mysqli_query($this->con,$qry);

            }

            public function insert_and_get_orderId($columns ,$values){
                $qry= "INSERT INTO $this->table_name ($columns) VALUES ($values)";
               mysqli_query($this->con,$qry);
             return  mysqli_insert_id($this->con);

            }
        }

