<?php

require_once('../../app.php');

if($request->hasGet('id')){
    $id= $request->get('id');
    $ad = new Admin;
    $admin = $ad->delete($id);
    header("location:../index.php");

  

}
