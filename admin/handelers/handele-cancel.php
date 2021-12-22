<?php

require_once('../../app.php');

if($request->hasGet('id')){
    $id= $request->get('id');
    $or = new Orders;//status_of_order
    $or->update("status_of_order = 'canceled'",$id);
    $session->set('success','order canceled');
    header("location:../order.php?id=$id");

}
