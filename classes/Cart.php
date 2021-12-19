<?php
//require_once('../app.php');

class Cart{
    public function addCart($id , $data){
       $_SESSION['cart'][$id]=$data;
    
    }

    public function count(){
        return count($_SESSION['cart']);
    }

    public function total_price(){
        $total=0;
        foreach($_SESSION['cart'] as $id =>$data){
            $total+= $data['price'] * $data['qty'];
        }
        return $total;
    }

    public function get_all_product_in_cart(){
        return $_SESSION['cart'];
    }

    public function remove_item($id){
        unset($_SESSION['cart'][$id]);
    }
  
}