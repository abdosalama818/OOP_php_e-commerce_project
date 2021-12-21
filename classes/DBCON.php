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
                 $rslt = mysqli_query($this->con,$qry);
              

            }
            ///3shan tegib 3dd el product or categories or ...

            public function getCount(){
                $qry= "SELECT COUNT(*) AS cnt FROM $this->table_name";
                $rslt = mysqli_query($this->con,$qry);
                return mysqli_fetch_assoc($rslt)['cnt'];
            }

            public function insert_and_get_orderId($columns ,$values){
                $qry= "INSERT INTO $this->table_name ($columns) VALUES ($values)";
               mysqli_query($this->con,$qry);
             return  mysqli_insert_id($this->con);

            }


            public function update($set ,$id){
                $qry= "UPDATE $this->table_name SET $set WHERE id = $id";
              return mysqli_query($this->con,$qry);
           

            }

            public function delete($id){
                $qry= "DELETE FROM $this->table_name WHERE id = $id";
              return mysqli_query($this->con,$qry);
           

            }
        }


