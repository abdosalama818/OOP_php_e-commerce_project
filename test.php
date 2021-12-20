<?php

require_once('app.php');


$admin=new Admin;
$ar=$admin->login('admin@gmail.com','1' ,$session);



//$session->destroy();

//$ax = $admin->logout();

//echo "<br>";
if($ar){
    echo "heee";
}




