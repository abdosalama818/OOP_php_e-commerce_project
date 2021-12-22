<?php
require_once('../app.php');
require_once('../classes/Cart.php');
require_once('../classes/models/Order_Details.php');
if($request->hasPost('submit')){

    $name=$request->post('name');
    $email=$request->post('email');
    $phone=$request->post('phone');
   $address=$request->post('xxxx');
//echo $address ;
 //  die();
 $validater=new Validaters;
 $validater->validate('phone',$phone,['Required','Str']);
 $validater->validate('name',$name,['Required','Max']);

 if(!empty($email)){
 $validater->validate('email',$email,['Email','Str']);

 }
 if(!empty($address)){
    $validater->validate('address',$address,['Max','Str']);
   
    }




    if($validater->hasErrors()){
   $session->set('errors',$validater->getErrorss());
   header("location:../cart.php");

    }else{
     $order = new Orders;
     $cart = new Cart;
     $order_details = new OrderDetails;

     $orders_id=$order->insert_and_get_orderId("name,phone,email,`address`","'$name','$phone','$email','$address'");

     foreach($cart->get_all_product_in_cart() as $prodId => $prodData){
         $qty=$prodData['qty'];
        //print_r($prodData);

       // echo $orders_id;

       //  die();
     $order_details->insert("orders_id,product_id,qty" , " ' $orders_id', ' $prodId' ,' $qty'" );

     }

     header("location:../product.php");

    }

}