<?php

require_once('../../app.php');

if ($request->hasPost('submit')) {

    $id = $request->post('id');

    $name = $request->post('name');







    $validater = new Validaters;
    $validater->validate('name', $name, ['Required', 'Max', 'Str']);
    if ($validater->hasErrors()) {
        $session->set('errors', $validater->getErrorss());
        header("location:../add-product.php");
    } else {
        $c = new Cats;
        $c->update("name ='$name'", $id);
        $session->set('success', 'products added successfully');

        header("location:../categories.php");
        }
       

        /*
         $file = new File($img);
        $file_name =  $file->rename()->upload();
            $product = new Products;

        $product->update("name,price,piecesNo,`desc`,img,cat_id",
                 "'$name','$price','$pieces','$desc','$file_name','$cat_id'");
                 $session->set('success','products added successfully');
              
                 header("location:../products.php");*/
    
} else {
    
    header("loacation:../categories.php");
}
