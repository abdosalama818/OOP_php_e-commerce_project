<?php

require_once('../../app.php');

if($request->hasPost('submit')){

 
    $name=$request->post('name');
    
    $validater=new Validaters;

 $validater->validate('name',$name,['Required','Max','Str']);



 
 if($validater->hasErrors()){
    $session->set('errors',$validater->getErrorss());
    header("location:../add-category.php.php");
 
     }
     // lw mafish error ei eli hitem hna 
     else{
        $cat = new Cats;
      $cats = $cat->insert('name',"'$name'");
     $session->set('success','your operation success');
         
       
    header("location:../index.php");
       
     
     }



}else{
    header("location:../index.php");

}