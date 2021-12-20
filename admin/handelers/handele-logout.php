<?php

require_once('../../app.php');

$log = new Admin;
$logout = $log->logout();
 
      header("location:../login.php");


