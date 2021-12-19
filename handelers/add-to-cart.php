<?php
require_once('../app.php');
require_once('../classes/Cart.php');
if($request->hasPost('submit')){

    $id=$request->post('id');
    $qty=$request->post('qty');
    $name=$request->post('name');
   $price=$request->post('price');
   $img=$request->post('img');
   $product_data_in_Array=[
       'qty'=>$qty,
       'name'=>$name,
       'price'=>$price,
       'img'=>$img,
   ];

$cart = new Cart;
$product_in_cart = $cart->addCart($id,$product_data_in_Array);

header("location:../");


}
