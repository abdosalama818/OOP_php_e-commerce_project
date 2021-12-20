<?php

require_once('../../app.php');

if($request->hasPost('submit')){

  
    $email=$request->post('email');
    $password=$request->post('password');
    
    $validater=new Validaters;
 $validater->validate('email',$email,['Required','Email','Max']);
 $validater->validate('password',$password,['Required','Max','Str']);


 
 if($validater->hasErrors()){
    $session->set('errors',$validater->getErrorss());
    header("location:../login.php");
 
     }else{
        $admin = new Admin;
        $is_login = $admin->login($email,$password ,$session);
        if($is_login){
            header('location:../index.php');
         
        }else{
            $session->set('errors',['cardintial not correct']);
            header("location:../login.php");

        }
       
     
     }



}else{
    header("location:../login.php");

}