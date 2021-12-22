<?php

require_once('app.php');


$admin=new Admin;
$ar=$admin->login('admin@gmail.com','1' ,$session);



//$session->destroy();

//$ax = $admin->logout();

//echo "<br>";
$order_details= new OrderDetails;




$xw = $order_details->insert("orders_id",'1111');


$w = $order_details->selectAll();

print_r($w);





