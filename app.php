<?php
//path and url
define("PATH",__DIR__.'/');//for any thing use src=
define('URL','');//for any thing use href=
//data base cradintial
define('DB_SERVERNAME','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','e-commerce');


//includes classes




require_once(PATH."classes/DBCON.php");
require_once(PATH."classes/file.php");
require_once(PATH."classes/models/Products.php");
require_once(PATH."classes/models/orders.php");
require_once(PATH."classes/models/Order_Details.php");
require_once(PATH."classes/models/Admin.php");
//require_once(PATH."admin/handelers/handele-login.php");

require_once(PATH."classes/models/Cats.php");
require_once(PATH."classes/REQUEST2.php");
require_once(PATH."classes/Session.php");
require_once(PATH."classes/Cart.php");

require_once(PATH."classes/validation/VlidatorRules.php");
require_once(PATH."classes/validation/max.php");
require_once(PATH."classes/validation/numeric.php");
require_once(PATH."classes/validation/Require.php");
require_once(PATH."classes/validation/stirng.php");
require_once(PATH."classes/validation/Email.php");
require_once(PATH."classes/validation/RequiredFiles.php");
require_once(PATH."classes/validation/image.php");
require_once(PATH."classes/validation/Validators.php");
//objects
//this two object we will need it througuot the project in any page

$request = new Request;
$session = new Session;

//echo " hello";