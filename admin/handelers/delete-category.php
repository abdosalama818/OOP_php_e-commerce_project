<?php

require_once('../../app.php');

if($request->hasGet('id')){
    $id= $request->get('id');
    $c = new Cats;
 
    $c->delete( $id);
    header("location:../categories.php");
    $session->set('success' , 'selected category is deleted ');

}
