<?php

require_once('../../app.php');

if($request->hasGet('id')){
    $id= $request->get('id');
    $pr = new Products;
    $imgName = $pr->selectId($id , 'img')['img'];
    unlink(PATH . "uploads/$imgName");
    $pr->delete( $id);
    header("location:../products.php");

}
