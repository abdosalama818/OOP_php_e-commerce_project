<?php
//require_once('../app.php');

class Cart{
    public function addCart($id , $data){
       $_SESSION['cart'][$id]=$data;
    
    }

    public function count(){
       if(isset( $_SESSION['cart'])){
        return count($_SESSION['cart']);
       }else{
           return 0 ;
       }
    }

    public function total_price(){
        $total=0;
        if(isset( $_SESSION['cart'])){
            foreach($_SESSION['cart'] as $id =>$data){
            $total+= $data['price'] * $data['qty'];
        }
    
    }
        
        return $total;
    }

    public function get_all_product_in_cart(){
        if(isset( $_SESSION['cart'])){
        return $_SESSION['cart'];

        }else{
            return [];
        }
    }

    public function remove_item($id){
        unset($_SESSION['cart'][$id]);
    }
  
}