<?php

require_once('../../app.php');

if($request->hasPost('submit')){

  
    $name=$request->post('name');
    $cat_id=$request->post('cat_id');
    $price=$request->post('price');
    $pieces=$request->post('pieces');
    $desc = $request->post('desc');
    $img = $request->files('img');



 
    
    
    $validater=new Validaters;
 $validater->validate('price',$price,['Required','Numeric','Max']);
 $validater->validate('name',$name,['Required','Max','Str']);
 $validater->validate('discription',$desc,['Required','Max','Str']);
 $validater->validate('pieces of product',$pieces,['Required','Max','Numeric']);

 $validater->validate('img',$img,['RequiredFiles','Image']);
 

 if($validater->hasErrors()){
    $session->set('errors',$validater->getErrorss());
    header("location:../add-product.php");
 
     }else{
         $file = new File($img);
        $file_name =  $file->rename()->upload();
            $product = new Products;

        $product->insert("name,price,piecesNo,`desc`,img,cat_id",
                 "'$name','$price','$pieces','$desc','$file_name','$cat_id'");
                 $session->set('success','products added successfully');
              
                 header("location:../products.php");
        
     }
}else{
    header("loacation:../add-product.php");

}