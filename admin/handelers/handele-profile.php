<?php

require_once('../../app.php');

if($request->hasPost('submit')){

  
    $email=$request->post('email');
    $password=$request->post('password');
    $password_confirm=$request->post('password_confirmation');
    $name=$request->post('name');
    
    $validater=new Validaters;
 $validater->validate('email',$email,['Required','Email','Max']);
 $validater->validate('name',$name,['Required','Max','Str']);
 if(!empty($password) && $password !== $password_confirm){
 $validater->validate('password',$password,['Required','Max','Str']);

 }


 
 if($validater->hasErrors()){
    $session->set('errors',$validater->getErrorss());
    header("location:../login.php");
 
     }
     // lw mafish error ei eli hitem hna 
     else{
        $admin = new Admin;
         $password_hashed = password_hash($password , PASSWORD_DEFAULT);
           $admin->update("name='$name',email='$email',password='$password_hashed'",$session->get('adminId'));
     $session->set('success','your operation success');
         
       
    header("location:../index.php");
       
     
     }



}else{
    header("location:../login.php");

}