<?php

require_once('../../app.php');

if($request->hasGet('id')){
    $id= $request->get('id');
    $or = new Orders;//status_of_order
    $or->update("status_of_order = 'approve'",$id);
    $session->set('success','order aproved');
    header("location:../order.php");

}
