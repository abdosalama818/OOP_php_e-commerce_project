<?php
require_once('../app.php');
require_once('../classes/Cart.php');
if($request->hasGet('id')){
   $id = $request->get('id') ;
    $cart= new Cart;
    $cart->remove_item($id);
   header("location:../cart.php");
}